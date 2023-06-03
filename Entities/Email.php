<?php
//Entities/Email.php

declare(strict_types=1);

namespace entities;

class Email {
    private string $_nameSender;
    private string $_emailSender;
    private string $_recipient;
    private string $_subject;
    private string $_message;
    private mixed $_headers;

    public function __construct(string $nameSender, string $emailSender, string $recipient, string $subject, string $message, mixed $headers) {
        $this->_nameSender = $nameSender;
        $this->_emailSender = $emailSender;
        $this->_recipient = $recipient;
        $this->_subject = $subject;
        $this->_message = $message;
        $this->_headers = $headers;
    }

    public function setNameSender(string $nameSender): void {
        $this->_nameSender = $nameSender;
    }
    public function getNameSender(): string {
        return $this->_nameSender;
    }

    public function setEmailSender(string $emailSender): void {
        $this->_emailSender = $emailSender;
    }
    public function getEmailSender(): string {
        return $this->_emailSender;
    }

    public function setRecipient(string $recipient): void {
        $this->_recipient = $recipient;
    }
    public function getRecipient(): string {
        return $this->_recipient;
    }

    public function setSubject(string $subject): void {
        $this->_subject = $subject;
    }
    public function getSubject(): string {
        return $this->_subject;
    }

    public function setMessage(string $message): void {
        $this->_message = $message;
    }
    public function getMessage(): string {
        return $this->_message;
    }

    public function setHeaders(mixed $headers): void {
        $this->_headers = $headers;
    }

    public function getHeaders(): mixed {
        return $this->_headers;
    }
}