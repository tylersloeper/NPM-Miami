<?php namespace LazyLoadOptimizer\Admin;

use Premmerce\SDK\V2\FileManager\FileManager;

class Settings
{

    const OPTIONS = 'lazy_load';

    const SETTINGS_PAGE = 'lazy_load_page';

    private $fileManager;

    private $options;

//plugin default options

    const CSS_CLASSES = '';
    const EXPAND = '';
    const EXP_FACTOR = '';
    const INIT = true;
    const LOAD_HIDDEN = true;


    public function __construct(FileManager $fileManager)
    {
        $this->fileManager = $fileManager;
        $this->options = get_option(self::OPTIONS);
        if(!isset($this->options['init'])){
            $this->options['init'] = self::INIT;
            update_option(self::OPTIONS, $this->options);
        }
    }


    public function registerSettings()
    {
        register_setting(self::OPTIONS, self::OPTIONS, array(
            'sanitize_callback' => array($this, 'updateSettings'),
        ));

        add_settings_section('main_settings', __('', 'lazy-load-optimizer'), array(
            $this,
            'mainSection',
        ), self::SETTINGS_PAGE);

    }

    public function mainSection()
    {
        $this->fileManager->includeTemplate('admin/section/main-settings.php', array(
            'cssClasses' => $this->getOption('cssClasses'),
            'loadHidden' => $this->getOption('loadHidden'),
            'init' => $this->getOption('init'),
            'expand' => $this->getOption('expand'),
            'expFactor' => $this->getOption('expFactor')
        ));
    }

    public function showSettings()
    {
        print('<form action="' . admin_url('options.php') . '" method="post">');

        //settings_errors();

        settings_fields(self::OPTIONS);

        do_settings_sections(self::SETTINGS_PAGE);

        submit_button();
        print('</form>');
    }


    public function updateSettings($settings)
    {
        if(!isset($settings['init']))
            $settings['init'] = 0;

        if(!isset($settings['loadHidden']))
            $settings['loadHidden'] = 0;

        return $settings;
    }

    /**
     * @param string $key
     * @param mixed|null $default
     *
     * @return mixed|null
     */
    public function getOption($key, $default = null)
    {
        return isset($this->options[ $key ])? $this->options[ $key ] : $default;
    }
}
