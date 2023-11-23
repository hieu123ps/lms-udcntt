<?php

class __Mustache_4e6d10938ebdfb0806edbfe8759f6729 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="card activity-navigation">
';
        $buffer .= $indent . '    <div class="card-body">
';
        $buffer .= $indent . '        ';
        if ($parent = $this->mustache->loadPartial('core/columns-1to1to1')) {
            $context->pushBlockContext(array(
                'column1' => array($this, 'blockBe1e848e0c3cd7c21ee4f0569f1e51af'),
                'column2' => array($this, 'blockE0a0c46eac36ce127f08a485b172a32a'),
                'column3' => array($this, 'block530ecd71a0a94061d461658feb2157c1'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section296e5d708316fdec84d1a11edaa264b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'prev_activity, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'prev_activity, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDbd2e67f557a2f895a5068b741e77fab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="nav-guide">
                            {{#str}}prev_activity, theme_moove{{/str}}
                        </span>
                        {{> core/action_link }}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="nav-guide">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->section296e5d708316fdec84d1a11edaa264b3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
';
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF38cbdd58a4e67e3cb86ecb5ee6001b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/url_select }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section483a82fe29022a93013c7a6cf263e197(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'next_activity, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'next_activity, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a82f126d45c1cb7ec9e2cd085efbf5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="nav-guide">
                            {{#str}}next_activity, theme_moove{{/str}}
                        </span>
                        {{> core/action_link }}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="nav-guide">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->section483a82fe29022a93013c7a6cf263e197($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
';
                if ($partial = $this->mustache->loadPartial('core/action_link')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockBe1e848e0c3cd7c21ee4f0569f1e51af($context)
    {
        $indent = $buffer = '';
        $buffer .= '                <div id="prev-activity" class="float-left">
';
        $value = $context->find('prevlink');
        $buffer .= $this->sectionDbd2e67f557a2f895a5068b741e77fab($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
    
        return $buffer;
    }

    public function blockE0a0c46eac36ce127f08a485b172a32a($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '                <div class="mdl-align">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('activitylist');
        $buffer .= $this->sectionF38cbdd58a4e67e3cb86ecb5ee6001b3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
    
        return $buffer;
    }

    public function block530ecd71a0a94061d461658feb2157c1($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '                <div id="next-activity" class="float-right">
';
        $value = $context->find('nextlink');
        $buffer .= $this->section0a82f126d45c1cb7ec9e2cd085efbf5d($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
    
        return $buffer;
    }
}
