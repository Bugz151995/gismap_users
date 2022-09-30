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

    public $signup = [
        'fname' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'The First Name field is required.'
            ]
        ],
        'mname' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'The Middle Name field is required.'
            ]
        ],
        'lname' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'The Last Name field is required.'
            ]
        ],
        'cnum' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'The Contact Number field is required.'
            ]
        ],
        'username' => [
            'rules' => 'required|is_unique[account_tbl.username]',
            'errors' => [
                'required' => 'The Username field is required.',
                'is_unique' => 'The Username is already taken.'
            ]
        ],
        'password' => [
            'rules' => 'required|matches[confpassword]',
            'errors' => [
                'required' => 'The Password field is required.',
                'matches' => 'The Password does not match.'
            ]
        ],
        'confpassword' => [
            'rules' => 'required|matches[password]',
            'errors' => [
                'required' => 'The Confirm Password field is required.',
                'matches' => 'The Password does not match.'
            ]
        ]
    ];
}
