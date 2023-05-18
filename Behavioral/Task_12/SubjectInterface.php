<?php

namespace Behavioral\Observer\Task12;

interface SubjectInterface
{
    public function Register(ObserverInterface $Observer);
    public function Remove(ObserverInterface $Observer);
    public function Notify();
}
