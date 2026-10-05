<?php
namespace controllers;

class PlanSite
{
    public function execute(): void
    {

        new \views\PlansiteView()->show();

    }

}