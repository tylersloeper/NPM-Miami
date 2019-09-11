<?php namespace LazyLoadOptimizer\Frontend;

use Premmerce\SDK\V2\FileManager\FileManager;
use LazyLoadOptimizer\LazyLoadOptimizerPlugin;
use  LazyLoadOptimizer\Admin\Settings;

/**
 * Class Frontend
 *
 * @package LazyLoadOptimizer\Frontend
 */
class Frontend
{

    /**
     * @var FileManager
     */
    private $fileManager;

    private $options;

    public $settings;

    public function __construct(FileManager $fileManager)
    {
        $this->options = get_option(Settings::OPTIONS);
        $this->fileManager = $fileManager;
        $this->registerActions();
        $this->settings = array(
            'lazyload_styles' => get_theme_mod('lazyload_styles',1)
        );
    }

    private function registerActions()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueueScripts'));
        add_action('wp_head', array($this, 'addInlineStyles'));
        add_filter('wp_get_attachment_image_attributes', array($this, 'addDataSrcAttachmentImage'), 50, 3);
        add_action('init', array($this, 'initActions'));
        add_filter('script_loader_tag', array($this, 'addAsyncAttribute'), 20, 2);
        add_filter('the_content', array($this, 'filterImages'), 100);
        add_filter('acf_the_content', array($this, 'filterImages'), 100);
        add_filter('widget_text', array($this, 'filterImages'), 100);
        add_filter('get_avatar', array($this, 'filterAvatar'), 10);

    }


    public function enqueueScripts()
    {

        wp_enqueue_script(
            'lazysizes',
            $this->fileManager->locateAsset('frontend/js/lazysizes.min.js'),
            array(),
            LazyLoadOptimizerPlugin::VERSION,
            true
        );

        if($this->settings['lazyload_styles']) {
wp_add_inline_script('lazysizes', "document.addEventListener('lazyloaded', function (e){
var alt = e.target.getAttribute('data-alt');
if(alt){
    e.target.removeAttribute('data-alt');
    e.target.setAttribute('alt',alt);
}
var title = e.target.getAttribute('data-title');
if(title){
    e.target.removeAttribute('data-title');
    e.target.setAttribute('title',title);
}});");
}

        if(isset($this->options['expand'])){
            $expand = ($this->options['expand'])?"window.lazySizesConfig.expand = {$this->options['expand']};":'';
        } else{
            $expand = '';
        }

        if(isset($this->options['expFactor'])){
            $expFactor = ($this->options['expFactor'])?"window.lazySizesConfig.expFactor = {$this->options['expFactor']};":'';
        } else{
            $expFactor = '';
        }

        if(isset($this->options['loadHidden'])){
            $loadHidden = ($this->options['loadHidden'])?"":"window.lazySizesConfig.loadHidden = false;";
        } else{
            $loadHidden = '';
        }

        if(isset($this->options['init'])){
            $init = ($this->options['init'])?'':'window.lazySizesConfig.init = false;';
        }else{
            $init = '';
        }


        wp_add_inline_script( 'lazysizes',
            "window.lazySizesConfig = window.lazySizesConfig || {}; $init $expand $expFactor $loadHidden",
            'before' );
    }

    public function addInlineStyles()
    {
        $this->settings = array(
            'lazyload_styles' => get_theme_mod('lazyload_styles',1),
            'img_url' => get_theme_mod('spinner_image', $this->fileManager->locateAsset('frontend/img/50x50-loader.gif')),
            'loading_effect' => get_theme_mod('loading_effect','spinner'),
            'is_spinner' => get_theme_mod('spinner',1),
            'is_fadein' => get_theme_mod('fade_in',0),
            'is_animation' => get_theme_mod('animation',0),
            'spinner_size' => get_theme_mod('spinner_size',30),
            'time_animation' => get_theme_mod('time_animation',300),
            'time_fadein' => get_theme_mod('time_fadein',300),
            'is_transparent' => get_theme_mod('transparent_background',0),
            'background_color' => get_theme_mod('lla_background_color', '#ffffff')
        );

        $spinner = '';
        $opacity = 1;

        if($this->settings['is_spinner']){
            $spinner = " background-image: url('{$this->settings['img_url']}');";
        }

        if($this->settings['is_fadein']){
            $opacity = 0.001;
            $transition = "-webkit-transition:opacity {$this->settings['time_fadein']}ms;
-moz-transition: opacity {$this->settings['time_animation']}ms;
-ms-transition: opacity {$this->settings['time_animation']}ms;
-o-transition: opacity {$this->settings['time_animation']}ms;
transition: opacity {$this->settings['time_animation']}ms;";
        }

        if($this->settings['is_animation']){
            $transition = "-webkit-transition:{$this->settings['time_animation']}ms cubic-bezier(0.215, 0.61, 0.355, 1);
-moz-transition:{$this->settings['time_animation']}ms cubic-bezier(0.215, 0.61, 0.355, 1);
-ms-transition:{$this->settings['time_animation']}ms cubic-bezier(0.215, 0.61, 0.355, 1);
-o-transition:{$this->settings['time_animation']}ms cubic-bezier(0.215, 0.61, 0.355, 1);
transition:{$this->settings['time_animation']}ms cubic-bezier(0.215, 0.61, 0.355, 1);";
        }

        if($this->settings['is_fadein'] && $this->settings['is_animation']){
            $opacity = 0.001;
            $transition = "-webkit-transition: all {$this->settings['time_fadein']}ms cubic-bezier(0.215, 0.61, 0.355, 1);
-moz-transition: all {$this->settings['time_animation']}ms cubic-bezier(0.215, 0.61, 0.355, 1);
-ms-transition: all {$this->settings['time_animation']}ms cubic-bezier(0.215, 0.61, 0.355, 1);
-o-transition: all {$this->settings['time_animation']}ms cubic-bezier(0.215, 0.61, 0.355, 1);
transition: all {$this->settings['time_animation']}ms cubic-bezier(0.215, 0.61, 0.355, 1);";
        }

        if($this->settings['is_transparent']){
            $backgroundColor = 'background-color: rgba(0,0,0,0);';
        }else{
            $backgroundColor = 'background-color: '.$this->settings['background_color'].';';
        }

$styles = "<style>img.lazyload,img.lazyloading{
display: block;
font-size:0px;
height: 0px!important;
max-height: 0px!important;
$backgroundColor
$spinner
background-repeat: no-repeat;
background-position: 50% 50%;
background-size: {$this->settings['spinner_size']}px;
}
@supports (--custom:property) {
[style*='--aspect-ratio'].lazyload,[style*='--aspect-ratio'].lazyloading{
padding-bottom: calc(100%/(var(--aspect-ratio)));
}}
.lazyload, .lazyloading {
opacity: $opacity; 
}
.lazyload, .lazyloaded {
opacity: 1;
$transition;
}
.wp-block-gallery.is-cropped .blocks-gallery-item img.lazyload{
height:auto;
}
figure.wp-block-image{
display:inline-block;
}
figure.wp-block-image.alignwide, figure.wp-block-image.alignfull{
display:block;
}</style>";

        if($this->settings['lazyload_styles']){
            echo apply_filters( 'lazy_load_styles', $styles );
        }else{
            echo "<style>img.lazyload{opacity: 0.001;}</style>";
        }
    }

    public function addAsyncAttribute($tag, $handle)
    {

        if ('lazysizes' !== $handle) {
            return $tag;
        }

        return str_replace(' src', ' async="async" src', $tag);
    }

    public function addDataSrcAttachmentImage($attr, $attachment, $size)
    {
        if (is_feed() || is_admin() ) {
            return $attr;
        }
        if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() === true ) {
            return $attr;
        }
        if($this->options['cssClasses']){
            $classes = $this->options['cssClasses'];
            $classesArray = explode(",", $classes);
            foreach ($classesArray as $class){
                if(strpos($attr['class'], $class) !== false){
                    return $attr;
                }
            }
        }


        $image = image_downsize($attachment->ID,$size);
        if(!empty($image[1]) && !empty($image[2])){
            $ratio = $image[1]/$image[2];
        }else{
            $ratio = 2;
        }
        $attr['style'] = '--aspect-ratio:'.$ratio.';';
        if (isset($attr['src'])){
            $dataSrc = array('data-src' => $attr['src']);
            unset($attr['src']);
            $attr = $dataSrc + $attr;
        }

        if($this->settings['lazyload_styles']) {
            if (isset($attr['title'])) {
                $dataTitle = array('data-title' => $attr['title']);
                unset($attr['title']);
                $attr = $attr + $dataTitle;
            }

            if (isset($attr['alt'])) {
                $dataAlt = array('data-alt' => $attr['alt']);
                unset($attr['alt']);
                $attr = $attr + $dataAlt;
            }
        }

        if (isset($attr['srcset'])){
            $dataSrcSet = array('data-srcset' => $attr['srcset']);
            unset($attr['srcset']);
            $attr = $dataSrcSet + $attr;
        }
        $attr['class'] = $attr['class'] . ' lazyload';

        return $attr;
    }


    public function initActions()
    {
        global $allowedposttags;
        $img = $allowedposttags['img'];
        $dataSrc = array('data-src' => true);
        $dataSrcSet = array('data-srcset' => true);
        $allowedposttags['img'] = $img + $dataSrc + $dataSrcSet;

        remove_action('woocommerce_before_subcategory_title', 'woocommerce_subcategory_thumbnail', 10);
        add_action('woocommerce_before_subcategory_title', array($this, 'woocommerceSubcategoryThumbnail'), 10);


    }

    public function woocommerceSubcategoryThumbnail($category)
    {

        $small_thumbnail_size = apply_filters('subcategory_archive_thumbnail_size', 'woocommerce_thumbnail');
        $dimensions = wc_get_image_size($small_thumbnail_size);
        $thumbnail_id = get_woocommerce_term_meta($category->term_id, 'thumbnail_id', true);

        if ($thumbnail_id) {
            $image = wp_get_attachment_image_src($thumbnail_id, $small_thumbnail_size);
            if(!empty($image[1]) && !empty($image[2])){
                $ratio = $image[1]/$image[2];
            }else{
                $ratio = 2;
            }
            $image = $image[0];
            $image_srcset = function_exists('wp_get_attachment_image_srcset') ? wp_get_attachment_image_srcset($thumbnail_id, $small_thumbnail_size) : false;
            $image_sizes = function_exists('wp_get_attachment_image_sizes') ? wp_get_attachment_image_sizes($thumbnail_id, $small_thumbnail_size) : false;

        } else {
            $image = wc_placeholder_img_src();
            $image_srcset = false;
            $image_sizes = false;
            $ratio = 1.0179;
        }

        if ($image) {
            // Prevent esc_url from breaking spaces in urls for image embeds.
            // Ref: https://core.trac.wordpress.org/ticket/23605.
            $image = str_replace(' ', '%20', $image);
            $style = 'style="--aspect-ratio:'.$ratio.';"';
            // Add responsive image markup if available.
            if ( $image_srcset && $image_sizes ) {
                echo '<img '.$style.' data-src="' . esc_url( $image ) . '" data-alt="' . esc_attr( $category->name ) . '" width="' . esc_attr( $dimensions['width'] ) . '" height="' . esc_attr( $dimensions['height'] ) . '" data-srcset="' . esc_attr( $image_srcset ) . '" sizes="' . esc_attr( $image_sizes ) . '" class="lazyload" />';
            } else {
                echo '<img '.$style.' data-src="' . esc_url( $image ) . '" data-alt="' . esc_attr( $category->name ) . '" width="' . esc_attr( $dimensions['width'] ) . '" height="' . esc_attr( $dimensions['height'] ) . '" class="lazyload" />';
            }
        }
    }


    public function FilterImages($content)
    {
        if ( empty( $content ) || is_feed() || is_admin() ) {
            return $content;
        }
        if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() === true ) {
            return $content;
        }

        $matches = array();
        preg_match_all('/<img[\s\r\n]+(.*?)>/is', $content, $matches);

        $search = array();
        $replace = array();


        foreach ($matches[0] as $img_html) {
            $flag = false;
            if (strpos($img_html, 'data-src') !== false || strpos($img_html, 'data-srcset') !== false) {
                continue;
            }
            //CSS classes to exclude
            if($this->options['cssClasses']){
                $classes = $this->options['cssClasses'];
                $classesArray = explode(",", $classes);

                foreach ($classesArray as $class){
                    if(strpos($img_html, $class) !== false){
                        $flag = true;
                       break;
                    }
                }
                if($flag){
                    continue;
                }
            }

            $width= array();
            $heigth= array();

            preg_match('/width=["\']([0-9]{2,})["\']/i', $img_html, $width);
            preg_match('/height=["\']([0-9]{2,})["\']/i', $img_html, $heigth);

            if(!empty($width) && !empty($heigth)) {
                $ratio = $width[1]/$heigth[1];
                $isWidth = 1;
            }else{
                preg_match('/-([0-9]{2,})x/i', $img_html, $width);
                preg_match('/[0-9]{2,}x([0-9]{2,})\./i', $img_html, $heigth);
                if(!empty($width) && !empty($heigth)){
                    $ratio = $width[1]/$heigth[1];
                    $isWidth = 0;
                }else{
                    $ratio = 2;
                }
            }

            $style = 'style="--aspect-ratio:'.$ratio.';"';
            $widthHtml = '';

            $widthSizes = array();
            preg_match('/sizes=\"\(max-width: ([0-9]{2,})px/i', $img_html, $widthSizes);
            if(!$isWidth){
                if(!empty($widthSizes)){
                    $widthHtml = 'width="'. $widthSizes[1].'"';
                }else{
                    $widthHtml = 'width="'.$width[1].'"';
                }
            }

            $output = '';
            $output = preg_replace('/<img(.*?)src=/is', '<img  '.$widthHtml.' '.$style.' $1data-src=', $img_html);
            $output = preg_replace('/<img(.*?)srcset=/is', '<img$1data-srcset=', $output);
            if($this->settings['lazyload_styles']) {
                $output = preg_replace('/<img(.*?)alt=/is', '<img$1data-alt=', $output);
                $output = preg_replace('/<img(.*?)title=/is', '<img$1data-title=', $output);
            }

            if (preg_match('/class=["\']/i', $output)) {
                $output = preg_replace('/class=(["\'])(.*?)["\']/is', 'class=$1$2 lazyload$1', $output);
            } else {
                $output = preg_replace('/<img/is', '<img class="lazyload"', $output);
            }

            if (strpos($img_html, 'data-id') === false &&  $this->settings['lazyload_styles']) {
                $classHtml = array();
                preg_match('/class=["\'](.*?)["\']/i',$img_html, $classHtml);
                $output = '<span '.$classHtml[0].' style="display:block;max-width:'.$width[1].'px;">'.$output.'</span>';
            }

            array_push($search, $img_html);
            array_push($replace, $output);
        }

        $search = array_unique($search);
        $replace = array_unique($replace);
        $content = str_replace($search, $replace, $content);

        if($this->settings['lazyload_styles']) {
            $matchesFigure = array();
            preg_match_all('/<figure(.*?)figure>/i', $content, $matchesFigure);

            foreach ($matchesFigure[0] as $figure_html) {
                $output = preg_replace('/<figure(.*?)(<span.*;">)(.*?)(<\/span>)(.*?)figure>/i', '<figure$1$3$5figure>', $figure_html);
                array_push($search, $figure_html);
                array_push($replace, $output);
            }

            $search = array_unique($search);
            $replace = array_unique($replace);
            $content = str_replace($search, $replace, $content);
        }
        return $content;
    }

    public function FilterAvatar($content)
    {

        if ( empty( $content ) || is_feed() || is_admin() ) {
            return $content;
        }

        if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() === true ) {
            return $content;
        }

        $matches = array();
        preg_match_all('/<img[\s\r\n]+.*?>/is', $content, $matches);

        $search = array();
        $replace = array();


        foreach ($matches[0] as $img_html) {

            if (strpos($img_html, 'data-src') !== false || strpos($img_html, 'data-srcset') !== false) {
                continue;
            }

            $width= array();
            $heigth= array();

            preg_match('/width=["\']([0-9]{2,})["\']/i', $img_html, $width);
            preg_match('/height=["\']([0-9]{2,})["\']/i', $img_html, $heigth);

            if(!empty($width) && !empty($heigth)) {
                $ratio = $width[1]/$heigth[1];
            }else{
                preg_match('/-([0-9]{2,})x/i', $img_html, $width);
                preg_match('/[0-9]{2,}x([0-9]{2,})\./i', $img_html, $heigth);
                if(!empty($width) && !empty($heigth)){
                    $ratio = $width[1]/$heigth[1];
                }else{
                    $ratio = 2;
                }
            }

            $style = 'style="--aspect-ratio:'.$ratio.';"';

            $output = '';
            $output = preg_replace('/<img(.*?)src=/is', '<img '.$style.' $1data-src=', $img_html);
            $output = preg_replace('/<img(.*?)srcset=/is', '<img$1data-srcset=', $output);
            if($this->settings['lazyload_styles']) {
                $output = preg_replace('/<img(.*?)alt=/is', '<img$1data-alt=', $output);
            }

            if (preg_match('/class=["\']/i', $output)) {
                $output = preg_replace('/class=(["\'])(.*?)["\']/is', 'class=$1$2 lazyload$1', $output);
            } else {
                $output = preg_replace('/<img/is', '<img class="lazyload"', $output);
            }


            array_push($search, $img_html);
            array_push($replace, $output);
        }

        $search = array_unique($search);
        $replace = array_unique($replace);
        $content = str_replace($search, $replace, $content);
        return $content;
    }
}