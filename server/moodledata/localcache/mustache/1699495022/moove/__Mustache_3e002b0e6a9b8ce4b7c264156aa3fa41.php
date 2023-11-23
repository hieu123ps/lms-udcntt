<?php

class __Mustache_3e002b0e6a9b8ce4b7c264156aa3fa41 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="bottom">
';
        $value = $context->find('exportcalendarbutton');
        $buffer .= $this->section0423d1b024d8e702de5fff1c8208dc12($context, $indent, $value);
        $value = $context->find('managesubscriptionbutton');
        $buffer .= $this->section0423d1b024d8e702de5fff1c8208dc12($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section0423d1b024d8e702de5fff1c8208dc12(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core/single_button }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/single_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
