<?php

class __Mustache_d52d8f01907c157c4aed14664914062c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div';
        $buffer .= ' id="month-mini-';
        $value = $this->resolveValue($context->findDot('date.year'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->findDot('date.mon'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' class="calendarwrapper"';
        $buffer .= ' data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-categoryid="';
        $value = $this->resolveValue($context->find('categoryid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-month="';
        $value = $this->resolveValue($context->findDot('date.mon'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-year="';
        $value = $this->resolveValue($context->findDot('date.year'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-day="';
        $value = $this->resolveValue($context->findDot('date.mday'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-view="month"';
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/overlay_loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <table class="minicalendar calendartable">
';
        $buffer .= $indent . '        <caption class="calendar-controls">
';
        $value = $context->find('includenavigation');
        $buffer .= $this->sectionFf8fad8ea86bf07f7212ecca0f811c09($context, $indent, $value);
        $value = $context->find('includenavigation');
        if (empty($value)) {
            
            $buffer .= $indent . '                <h3>
';
            $buffer .= $indent . '                    <a href="';
            $value = $this->resolveValue($context->find('url'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '" title="';
            $value = $context->find('str');
            $buffer .= $this->section95c6799cb30cd89f1344831aab6696c3($context, $indent, $value);
            $buffer .= '">';
            $value = $this->resolveValue($context->find('periodname'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '</a>
';
            $buffer .= $indent . '                </h3>
';
        }
        $buffer .= $indent . '        </caption>
';
        $buffer .= $indent . '        <thead>
';
        $buffer .= $indent . '          <tr>
';
        $value = $context->find('daynames');
        $buffer .= $this->section7b7c62a3b4a44264ae1437e113a8c3bc($context, $indent, $value);
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '        </thead>
';
        $buffer .= $indent . '        <tbody>
';
        $value = $context->find('weeks');
        $buffer .= $this->section1008cf5b7a7fd9be10841c04eece0430($context, $indent, $value);
        $buffer .= $indent . '        </tbody>
';
        $buffer .= $indent . '    </table>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->sectionF07c562785ba0200c9459c6032229861($context, $indent, $value);

        return $buffer;
    }

    private function section79d01ec0a9380fe9e2b8dce0d84217d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'monthprev, calendar';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'monthprev, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section95c6799cb30cd89f1344831aab6696c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'monththis, calendar';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'monththis, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bdd9bdfb552b2c9a443cb6030f28476(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'monthnext, calendar';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'monthnext, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf8fad8ea86bf07f7212ecca0f811c09(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a{{!
                    }} href="#"{{!
                    }} class="arrow_link previous"{{!
                    }} title="{{#str}}monthprev, calendar{{/str}}"{{!
                    }} data-year="{{previousperiod.year}}"{{!
                    }} data-month="{{previousperiod.mon}}"{{!
                }}>
                    <span class="arrow">{{{larrow}}}</span>
                </a>
                <span class="hide"> | </span>
                <span class="current">
                    <a href="{{{url}}}" title="{{#str}}monththis, calendar{{/str}}">{{periodname}}</a>
                </span>
                <span class="hide"> | </span>
                <a{{!
                    }} href="#"{{!
                    }} class="arrow_link next"{{!
                    }} title="{{#str}}monthnext, calendar{{/str}}"{{!
                    }} data-year="{{nextperiod.year}}"{{!
                    }} data-month="{{nextperiod.mon}}"{{!
                }}>
                    <span class="arrow">{{{rarrow}}}</span>
                </a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a';
                $buffer .= ' href="#"';
                $buffer .= ' class="arrow_link previous"';
                $buffer .= ' title="';
                $value = $context->find('str');
                $buffer .= $this->section79d01ec0a9380fe9e2b8dce0d84217d2($context, $indent, $value);
                $buffer .= '"';
                $buffer .= ' data-year="';
                $value = $this->resolveValue($context->findDot('previousperiod.year'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $buffer .= ' data-month="';
                $value = $this->resolveValue($context->findDot('previousperiod.mon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $buffer .= '>
';
                $buffer .= $indent . '                    <span class="arrow">';
                $value = $this->resolveValue($context->find('larrow'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '                <span class="hide"> | </span>
';
                $buffer .= $indent . '                <span class="current">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section95c6799cb30cd89f1344831aab6696c3($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('periodname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '                <span class="hide"> | </span>
';
                $buffer .= $indent . '                <a';
                $buffer .= ' href="#"';
                $buffer .= ' class="arrow_link next"';
                $buffer .= ' title="';
                $value = $context->find('str');
                $buffer .= $this->section2bdd9bdfb552b2c9a443cb6030f28476($context, $indent, $value);
                $buffer .= '"';
                $buffer .= ' data-year="';
                $value = $this->resolveValue($context->findDot('nextperiod.year'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $buffer .= ' data-month="';
                $value = $this->resolveValue($context->findDot('nextperiod.mon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $buffer .= '>
';
                $buffer .= $indent . '                    <span class="arrow">';
                $value = $this->resolveValue($context->find('rarrow'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7b7c62a3b4a44264ae1437e113a8c3bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <th class="header text-xs-center">
                    <span class="sr-only">{{fullname}}</span>
                    <span aria-hidden="true">{{shortname}}</span>
                </th>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <th class="header text-xs-center">
';
                $buffer .= $indent . '                    <span class="sr-only">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                    <span aria-hidden="true">';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                </th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30ad4cd62bbcce6b32c5d2ea63ba3dca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <td class="dayblank">&nbsp;</td>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <td class="dayblank">&nbsp;</td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCce61e3fee851e8b66112494c048a58a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' today';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' today';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84f949a8191b4daaac38d5ac1997cd7a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' weekend';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' weekend';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE28f621eb042f18284779ecc71990758(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hasevent';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' hasevent';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8aa9feca8669cbbfdc6a37548f193ebe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' duration';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' duration';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC090550ce065bf0ee1844d93a2f5c5bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' duration_{{.}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' duration_';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB786f62feecbd1b2b3eaf0a04a4d40f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' duraction_finish';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' duraction_finish';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b9e1faf6dd22472e3bfefeb73470f9e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!
                            }} calendar_event_{{.}}{{!
                            }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' calendar_event_';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83917a04d3d8116850091e3dc79e37f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!
                            }} duration_finish{{!
                            }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' duration_finish';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC7135d539a6e01c773bccf5ca6b5dd9a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!
                        }} data-eventtype-{{.}}="1"{{!
                        }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' data-eventtype-';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="1"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDaed2e929d0e7585d426c393e8ac958e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'eventnone, calendar';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'eventnone, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC90a255a2f16bb31a3ca8bdd8572bc96(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div data-popover-eventtype-{{normalisedeventtype}}="1">
                                            {{> core_calendar/event_icon}}
                                            {{{popupname}}}
                                        </div>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '                                        <div data-popover-eventtype-';
                $value = $this->resolveValue($context->find('normalisedeventtype'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="1">
';
                if ($partial = $this->mustache->loadPartial('core_calendar/event_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                            ');
                }
                $buffer .= $indent . '                                            ';
                $value = $this->resolveValue($context->find('popupname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58174ab7c91c045cde19cb3de4cd6db8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{< core_calendar/minicalendar_day_link }}
                                {{$day}}{{mday}}{{/day}}
                                {{$url}}{{viewdaylink}}{{/url}}
                                {{$title}}{{popovertitle}}{{/title}}
                                {{$nocontent}}{{#str}}eventnone, calendar{{/str}}{{/nocontent}}
                                {{$content}}
                                    {{#events}}
                                        <div data-popover-eventtype-{{normalisedeventtype}}="1">
                                            {{> core_calendar/event_icon}}
                                            {{{popupname}}}
                                        </div>
                                    {{/events}}
                                {{/content}}
                            {{/ core_calendar/minicalendar_day_link }}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            ';
                if ($parent = $this->mustache->loadPartial('core_calendar/minicalendar_day_link')) {
                    $context->pushBlockContext(array(
                        'day' => array($this, 'block279b4b82294551e3022fb5ed73ff375a'),
                        'url' => array($this, 'block2a2dcc34f4d09e1b7d28da8146786c20'),
                        'title' => array($this, 'block6e25a709cf65f1b719a921e1c8350688'),
                        'nocontent' => array($this, 'block35cc7ca8286a7a4d94dc1dfd1fd46b2b'),
                        'content' => array($this, 'block2fd620c0b9697b416e652d42bfd26400'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $buffer .= $indent . '                        ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a65fb7b2864674dfdd2c5509a973ddd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <td class="day text-center{{!
                            This is the list of additional classes to display.

                            This cell is for today.
                            }}{{#istoday}} today{{/istoday}}{{!

                            This day falls on a weekend.
                            }}{{#isweekend}} weekend{{/isweekend}}{{!

                            There is at least one event.
                            }}{{#events.0}} hasevent{{/events.0}}{{!

                            There are events on this day which span multiple days.
                            }}{{#durationevents.0}} duration{{/durationevents.0}}{{!
                            }}{{#durationevents}} duration_{{.}}{{/durationevents}}{{!
                            }}{{#islastday}} duraction_finish{{/islastday}}{{!

                            These event types fall on this day.
                            }}{{#calendareventtypes}}{{!
                            }} calendar_event_{{.}}{{!
                            }}{{/calendareventtypes}}{{!

                            This day contains the last day of an event.
                            }}{{#haslastdayofevent}}{{!
                            }} duration_finish{{!
                            }}{{/haslastdayofevent}}{{!
                        }}"{{!

                        Add data-eventtype-[eventtype] data attributes.
                        These are used to show and hide events using the filter.
                        }}{{#calendareventtypes}}{{!
                        }} data-eventtype-{{.}}="1"{{!
                        }}{{/calendareventtypes}}{{!

                        This is the timestamp for this month.
                        }} data-day-timestamp="{{timestamp}}"{{!
                    }}>{{!
                        }}<span class="sr-only">{{daytitle}}</span>
                        {{#popovertitle}}
                            {{< core_calendar/minicalendar_day_link }}
                                {{$day}}{{mday}}{{/day}}
                                {{$url}}{{viewdaylink}}{{/url}}
                                {{$title}}{{popovertitle}}{{/title}}
                                {{$nocontent}}{{#str}}eventnone, calendar{{/str}}{{/nocontent}}
                                {{$content}}
                                    {{#events}}
                                        <div data-popover-eventtype-{{normalisedeventtype}}="1">
                                            {{> core_calendar/event_icon}}
                                            {{{popupname}}}
                                        </div>
                                    {{/events}}
                                {{/content}}
                            {{/ core_calendar/minicalendar_day_link }}
                        {{/popovertitle}}{{!
                        }}{{^popovertitle}}
                            <span aria-hidden="true">{{mday}}</span>
                        {{/popovertitle}}{{!
                    }}</td>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <td class="day text-center';
                $value = $context->find('istoday');
                $buffer .= $this->sectionCce61e3fee851e8b66112494c048a58a($context, $indent, $value);
                $value = $context->find('isweekend');
                $buffer .= $this->section84f949a8191b4daaac38d5ac1997cd7a($context, $indent, $value);
                $value = $context->findDot('events.0');
                $buffer .= $this->sectionE28f621eb042f18284779ecc71990758($context, $indent, $value);
                $value = $context->findDot('durationevents.0');
                $buffer .= $this->section8aa9feca8669cbbfdc6a37548f193ebe($context, $indent, $value);
                $value = $context->find('durationevents');
                $buffer .= $this->sectionC090550ce065bf0ee1844d93a2f5c5bc($context, $indent, $value);
                $value = $context->find('islastday');
                $buffer .= $this->sectionB786f62feecbd1b2b3eaf0a04a4d40f3($context, $indent, $value);
                $value = $context->find('calendareventtypes');
                $buffer .= $this->section6b9e1faf6dd22472e3bfefeb73470f9e($context, $indent, $value);
                $value = $context->find('haslastdayofevent');
                $buffer .= $this->section83917a04d3d8116850091e3dc79e37f9($context, $indent, $value);
                $buffer .= '"';
                $value = $context->find('calendareventtypes');
                $buffer .= $this->sectionC7135d539a6e01c773bccf5ca6b5dd9a($context, $indent, $value);
                $buffer .= ' data-day-timestamp="';
                $value = $this->resolveValue($context->find('timestamp'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $buffer .= '>';
                $buffer .= '<span class="sr-only">';
                $value = $this->resolveValue($context->find('daytitle'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $value = $context->find('popovertitle');
                $buffer .= $this->section58174ab7c91c045cde19cb3de4cd6db8($context, $indent, $value);
                $value = $context->find('popovertitle');
                if (empty($value)) {
                    
                    $buffer .= '
';
                    $buffer .= $indent . '                            <span aria-hidden="true">';
                    $value = $this->resolveValue($context->find('mday'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                        ';
                }
                $buffer .= '</td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1008cf5b7a7fd9be10841c04eece0430(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <tr data-region="month-view-week">
                {{#prepadding}}
                    <td class="dayblank">&nbsp;</td>
                {{/prepadding}}
                {{#days}}
                    <td class="day text-center{{!
                            This is the list of additional classes to display.

                            This cell is for today.
                            }}{{#istoday}} today{{/istoday}}{{!

                            This day falls on a weekend.
                            }}{{#isweekend}} weekend{{/isweekend}}{{!

                            There is at least one event.
                            }}{{#events.0}} hasevent{{/events.0}}{{!

                            There are events on this day which span multiple days.
                            }}{{#durationevents.0}} duration{{/durationevents.0}}{{!
                            }}{{#durationevents}} duration_{{.}}{{/durationevents}}{{!
                            }}{{#islastday}} duraction_finish{{/islastday}}{{!

                            These event types fall on this day.
                            }}{{#calendareventtypes}}{{!
                            }} calendar_event_{{.}}{{!
                            }}{{/calendareventtypes}}{{!

                            This day contains the last day of an event.
                            }}{{#haslastdayofevent}}{{!
                            }} duration_finish{{!
                            }}{{/haslastdayofevent}}{{!
                        }}"{{!

                        Add data-eventtype-[eventtype] data attributes.
                        These are used to show and hide events using the filter.
                        }}{{#calendareventtypes}}{{!
                        }} data-eventtype-{{.}}="1"{{!
                        }}{{/calendareventtypes}}{{!

                        This is the timestamp for this month.
                        }} data-day-timestamp="{{timestamp}}"{{!
                    }}>{{!
                        }}<span class="sr-only">{{daytitle}}</span>
                        {{#popovertitle}}
                            {{< core_calendar/minicalendar_day_link }}
                                {{$day}}{{mday}}{{/day}}
                                {{$url}}{{viewdaylink}}{{/url}}
                                {{$title}}{{popovertitle}}{{/title}}
                                {{$nocontent}}{{#str}}eventnone, calendar{{/str}}{{/nocontent}}
                                {{$content}}
                                    {{#events}}
                                        <div data-popover-eventtype-{{normalisedeventtype}}="1">
                                            {{> core_calendar/event_icon}}
                                            {{{popupname}}}
                                        </div>
                                    {{/events}}
                                {{/content}}
                            {{/ core_calendar/minicalendar_day_link }}
                        {{/popovertitle}}{{!
                        }}{{^popovertitle}}
                            <span aria-hidden="true">{{mday}}</span>
                        {{/popovertitle}}{{!
                    }}</td>
                {{/days}}
                {{#postpadding}}
                    <td class="dayblank">&nbsp;</td>
                {{/postpadding}}
            </tr>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <tr data-region="month-view-week">
';
                $value = $context->find('prepadding');
                $buffer .= $this->section30ad4cd62bbcce6b32c5d2ea63ba3dca($context, $indent, $value);
                $value = $context->find('days');
                $buffer .= $this->section8a65fb7b2864674dfdd2c5509a973ddd($context, $indent, $value);
                $value = $context->find('postpadding');
                $buffer .= $this->section30ad4cd62bbcce6b32c5d2ea63ba3dca($context, $indent, $value);
                $buffer .= $indent . '            </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF07c562785ba0200c9459c6032229861(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([
    \'jquery\',
    \'core_calendar/selectors\',
    \'core_calendar/events\',
], function(
    $,
    CalendarSelectors,
    CalendarEvents
) {

    $(\'body\').on(CalendarEvents.filterChanged, function(e, data) {
        M.util.js_pending("month-mini-{{uniqid}}-filterChanged");
        // A filter value has been changed.
        // Find all matching cells in the popover data, and hide them.
        $("#month-mini-{{date.year}}-{{date.mon}}-{{uniqid}}")
            .find(CalendarSelectors.popoverType[data.type])
            .toggleClass(\'hidden\', !!data.hidden);
        M.util.js_complete("month-mini-{{uniqid}}-filterChanged");
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'core_calendar/selectors\',
';
                $buffer .= $indent . '    \'core_calendar/events\',
';
                $buffer .= $indent . '], function(
';
                $buffer .= $indent . '    $,
';
                $buffer .= $indent . '    CalendarSelectors,
';
                $buffer .= $indent . '    CalendarEvents
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'body\').on(CalendarEvents.filterChanged, function(e, data) {
';
                $buffer .= $indent . '        M.util.js_pending("month-mini-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-filterChanged");
';
                $buffer .= $indent . '        // A filter value has been changed.
';
                $buffer .= $indent . '        // Find all matching cells in the popover data, and hide them.
';
                $buffer .= $indent . '        $("#month-mini-';
                $value = $this->resolveValue($context->findDot('date.year'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-';
                $value = $this->resolveValue($context->findDot('date.mon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '")
';
                $buffer .= $indent . '            .find(CalendarSelectors.popoverType[data.type])
';
                $buffer .= $indent . '            .toggleClass(\'hidden\', !!data.hidden);
';
                $buffer .= $indent . '        M.util.js_complete("month-mini-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-filterChanged");
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block279b4b82294551e3022fb5ed73ff375a($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('mday'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function block2a2dcc34f4d09e1b7d28da8146786c20($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('viewdaylink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function block6e25a709cf65f1b719a921e1c8350688($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('popovertitle'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function block35cc7ca8286a7a4d94dc1dfd1fd46b2b($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionDaed2e929d0e7585d426c393e8ac958e($context, $indent, $value);
    
        return $buffer;
    }

    public function block2fd620c0b9697b416e652d42bfd26400($context)
    {
        $indent = $buffer = '';
        $value = $context->find('events');
        $buffer .= $this->sectionC90a255a2f16bb31a3ca8bdd8572bc96($context, $indent, $value);
    
        return $buffer;
    }
}
