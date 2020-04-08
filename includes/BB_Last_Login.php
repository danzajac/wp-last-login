<?php

class BB_Last_Login
{
    public static function init()
    {
        add_action('wp_login', [BB_Last_Login::class, 'updateTimestamp'], 10, 2);
        add_filter('manage_users_columns', [BB_Last_Login::class, 'addAdminColumns']);
        add_filter('manage_users_custom_column', [BB_Last_Login::class, 'addTimestamp'], 10, 3);
    }

    public static function updateTimestamp($user_login, $user)
    {
        update_user_meta($user->ID, 'bb_last_login', date('Y-m-d H:i:s'));
    }

    public static function addAdminColumns($column)
    {
        $column['last_login'] = 'Last Login';

        return $column;
    }

    public static function addTimestamp($value, $column_name, $user_id)
    {
        if ($column_name === 'last_login') {
            $date = get_user_meta($user_id, 'bb_last_login', true);

            return !empty($date) ? $date : 'N/A';
        }

        return $value;
    }
}
