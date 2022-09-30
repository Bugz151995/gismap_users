<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;
use App\Validation\SigninRules;

class Validation extends BaseConfig
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
        SigninRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
    public $signin = [
        'username' => [
            'rules' => 'required|user_exists[username]',
            'errors' => [
                'user_exists' => 'Username not found.'
            ]
        ],
        'password' => [
            'rules' => 'required|password_matches[username, password]',
            'errors' => [
                'password_matches' => 'Incorrect password.',
                // 'login_attempt' => 'Max login attempt has been reached, try again later.'
            ]
        ]
    ];

    public $new_account = [
        'fname' => 'required',
        'mname' => 'required',
        'lname' => 'required',
        'contact_number' => 'required',
        'username' => 'required|is_unique[account_tbl.username]',
        'password' => 'required|matches[conf_password]',
        'conf_password' => 'required|matches[password]',
    ];

    public $edit_account = [
        'fname' => 'required',
        'mname' => 'required',
        'lname' => 'required',
        'contact_number' => 'required',
        'username' => 'required'
    ];
}
