<?php

namespace shop\services\auth;

use shop\entities\User\User;
use shop\repositories\NotFoundException;
use shop\repositories\UserRepository;
use shop\forms\auth\SignupForm;
use yii\mail\MailerInterface;

class SignupService
{
    private $mailer;
    private $users;
    public function __construct(UserRepository $users, MailerInterface $mailer)
    {
        $this->mailer = $mailer;
        $this->users = $users;
    }
    public function signup(SignupForm $form): User
    {
        /*if (User::find()->andWhere(['username'=>$form->username])) {
            throw new NotFoundException('Username is already exists.');
        }
        if (User::find()->andWhere(['email'=>$form->email])) {
            throw new NotFoundException('Email is already exists.');
        }*/
        $user = User::create(
            $form->username,
            $form->email,
            $form->password
        );

        if (!$user->save()) {
            throw new \RuntimeException('Saving error.');
        }

        return $user;
    }
    public function confirm($token): void
    {
        if (empty($token)) {
            throw new \DomainException('Empty confirm token.');
        }
        $user = $this->users->getByEmailConfirmToken($token);
        $user->confirmSignup();
        $this->users->save($user);
    }
}