<?php

 public static function subscribeToMailchimp($email = NULL, $listId = NULL, $vars = array()){
        if(is_null($email) OR is_null($listId)){
            return NULL;
        }
        $mc_api_key = defined('MC_API_KEY') ? MC_API_KEY : '';
        $mc_instance = new Mailchimp_Core();
        $mc_instance->MCAPI($mc_api_key);
        // subscribe to the list provided
        $mc_instance->listSubscribe($listId, $email, $vars, 'html', false, true);
    }


    public static function updateSubscriberOnMailchimp($email = NULL, $listId = NULL, $vars = array()){
        if(is_null($email) OR is_null($listId)){
            return NULL;
        }
        $mc_api_key = defined('MC_API_KEY') ? MC_API_KEY : '';
        $mc_instance = new Mailchimp_Core();
        $mc_instance->MCAPI($mc_api_key);
        // subscribe to the list provided
        $success = $mc_instance->listUpdateMember($listId, $email, $vars, 'html', true);
        // the subscriber might not yet be on the list
        if(!$success){
            self::subscribeToMailchimp($listId, $email, $vars);
        }
    }

$report_start_date_mysql = date('Y-m-d', strtotime('-7 Day'));
            print_r($report_start_date_mysql); die;