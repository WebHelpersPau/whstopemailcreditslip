<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

class WHStopEmailCreditSlip extends Module
{
    public function __construct()
    {
        $this->name = "whstopemailcreditslip";
        $this->author = "Web Helpers";
        $this->displayName = "Web Helpers - " . $this->l("Stop Email Credit Slip");
        $this->description = $this->l("Overrides email sending when creating credit slip");
        $this->version = "1.0";

        $this->bootstrap = "true";
        parent::__construct();

        $this->confirmUninstall = $this->l(
            "Are you sure you want to uninstall this module?"
        );
    }

    public function install()
    {
        return
            parent::install();
    }

    public function uninstall()
    {
        return
            parent::uninstall();
        ;
    }
}
