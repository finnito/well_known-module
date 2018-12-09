<?php

return [
    "change_password_enabled" => [
        "type" => "anomaly.field_type.boolean",
        "config" => [
            "on_text" => "Enabled",
            "off_text" => "Disabled",
        ],
    ],
    "change_password_link" => [
        "type" => "anomaly.field_type.url",
        "config" => [
            "default_value" => "users/password/forgot",
        ],
    ],
];
