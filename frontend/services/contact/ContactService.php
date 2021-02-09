<?php
namespace frontend\services\contact;
use frontend\forms\ContactForm;
use yii\mail\MailerInterface;
class ContactService
{
    private $adminEmail;
    private $mailer;
    public function __construct($adminEmail, MailerInterface $mailer)
    {
        $this->adminEmail = $adminEmail;
        $this->mailer = $mailer;
    }

    public function send(ContactForm $form)
    {
        $sent = $this->mailer->compose()
            ->setTo($this->adminEmail)
            ->setFrom($form->email)//[Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
//            ->setReplyTo([$this->email => $this->name])
            ->setSubject($form->subject)
            ->setTextBody($form->body)
            ->send();
        if (!$sent) {
            throw new \RuntimeException('Sending Error.');
        }
    }

}