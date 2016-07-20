<?php


class Mail extends CI_Controller
{
    public $to;
    public $subject;
    public $message;
    public $attach = NULL;

    public function __construct()
    {

    }

    /**
     * 发送邮件
     * @param Mail $mail
     * @param bool $debug 调式模式
     *
     * @return mixed
     */
    public static function sendMail( Mail $mail, $debug = FALSE )
    {
        $CI = &get_instance();
        $CI->load->library('email');
        $CI->config->load('mail');
        $config = $CI->config->item('mail');
        $CI->email->initialize($config);

        $CI->email->from('minitest01@163.com', 'gnpok');
        $CI->email->to($mail->to);
        $CI->email->subject($mail->subject);
        $CI->email->message($mail->message);
        $CI->email->attach($mail->attach);
        
        $success = $CI->email->send();
        if ($debug) {
            echo $CI->email->print_debugger();
        }

        return $success;
    }
}