<?php

namespace Shomisha\LaravelConsoleWizard\Contracts;

interface Step
{
    public function take(Wizard $wizard);
}
