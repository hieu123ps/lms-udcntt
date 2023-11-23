<?php

class __Mustache_5b5a7ca58727db37a389021de82866ea extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('sponsorsfrontpage');
        $buffer .= $this->section35008d2e7a064afc7089ccce1920c61d($context, $indent, $value);
        $value = $context->find('clientsfrontpage');
        $buffer .= $this->sectionF0c17f380580e43c9468850bcf0e95e6($context, $indent, $value);

        return $buffer;
    }

    private function section880828ca7386d95221ed2d7c8195e32b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="item">
                <a href="{{{url}}}">
                    <img src="{{{image}}}" title="{{{url}}}"/>
                </a>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="item">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"/>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35008d2e7a064afc7089ccce1920c61d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="container frontpage-sponsors">
        <h2>{{{sponsorstitle}}}</h2>
        <p>{{{sponsorssubtitle}}}</p>
        <div class="row">
            {{#sponsors}}
            <div class="item">
                <a href="{{{url}}}">
                    <img src="{{{image}}}" title="{{{url}}}"/>
                </a>
            </div>
            {{/sponsors}}
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="container frontpage-sponsors">
';
                $buffer .= $indent . '        <h2>';
                $value = $this->resolveValue($context->find('sponsorstitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '        <p>';
                $value = $this->resolveValue($context->find('sponsorssubtitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '        <div class="row">
';
                $value = $context->find('sponsors');
                $buffer .= $this->section880828ca7386d95221ed2d7c8195e32b($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe23f2e369d574155e798dcf4e98b001(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="item">
                    <a href="{{{url}}}">
                        <img src="{{{image}}}" title="{{{url}}}"/>
                    </a>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="item">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"/>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0c17f380580e43c9468850bcf0e95e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="container frontpage-clients">
        <h2>{{{clientstitle}}}</h2>
        <p>{{{clientssubtitle}}}</p>
        <div class="row">
            {{#clients}}
                <div class="item">
                    <a href="{{{url}}}">
                        <img src="{{{image}}}" title="{{{url}}}"/>
                    </a>
                </div>
            {{/clients}}
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="container frontpage-clients">
';
                $buffer .= $indent . '        <h2>';
                $value = $this->resolveValue($context->find('clientstitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '        <p>';
                $value = $this->resolveValue($context->find('clientssubtitle'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '        <div class="row">
';
                $value = $context->find('clients');
                $buffer .= $this->sectionCe23f2e369d574155e798dcf4e98b001($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
