<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 09.11.2017
 * Time: 18:50
 */

class FeedbackController{
    public static function handleRequest(){
        $feedback = Feedback::feedb();

        render('feedback', array(
                'title' => 'this feedback',
                'feedback' => $feedback
            )
        );
    }

}