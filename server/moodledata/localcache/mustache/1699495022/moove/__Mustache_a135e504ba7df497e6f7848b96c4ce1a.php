<?php

class __Mustache_a135e504ba7df497e6f7848b96c4ce1a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="top-footer">
';
        $buffer .= $indent . '  <div class="container-fluid">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col-md-7 contact">
';
        $buffer .= $indent . '            <h3>';
        $value = $context->find('str');
        $buffer .= $this->section3d46676fa71043dd556eac6777c89162($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '            <h4>';
        $value = $this->resolveValue($context->find('getintouchcontent'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '            <ul>
';
        $value = $context->find('website');
        $buffer .= $this->sectionF445cf1e276891ecd3740f9ec34907f2($context, $indent, $value);
        $value = $context->find('mobile');
        $buffer .= $this->section7685ae9be7b5bcbaec0e2d27fc13ee61($context, $indent, $value);
        $value = $context->find('mail');
        $buffer .= $this->sectionF174db049d0f3e3c0acdafd45b2f774d($context, $indent, $value);
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-md-5 social">
';
        $buffer .= $indent . '          <ul>
';
        $value = $context->find('facebook');
        $buffer .= $this->section717e9da497aaaaec4cfa8f9997913fa7($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('twitter');
        $buffer .= $this->section60719e78ea6e626aadec32b787d17da0($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('linkedin');
        $buffer .= $this->sectionDe480e3276d238437465408012d79708($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('youtube');
        $buffer .= $this->section3eb5d36117446ef5ed54fb4b27fcb1c3($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('instagram');
        $buffer .= $this->sectionCd2c8df34486582fad7201a68b4ac4b3($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('whatsapp');
        $buffer .= $this->section024c58a22cf46c5ea6a43c34f331b770($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('telegram');
        $buffer .= $this->section55d81d78447e008ac659b51263a0a8f7($context, $indent, $value);
        $buffer .= $indent . '          </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '          ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<footer id="page-footer" class="p-y-1">
';
        $buffer .= $indent . '  <div class="container-fluid">
';
        $buffer .= $indent . '      <div id="course-footer">';
        $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '      <div class="madewithmoodle">
';
        $buffer .= $indent . '          <p>';
        $value = $context->find('str');
        $buffer .= $this->section35f635c8ba97bc48efcfa9ed9dd99cf3($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '          <a href="https://ischool.com"><img src="';
        $value = $this->resolveValue($context->findDot('output.get_pix_image_url_base'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '/moodle-logo-white.png" alt="Moodle logo"></a>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</footer>
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';

        return $buffer;
    }

    private function section3d46676fa71043dd556eac6777c89162(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'stayintouch, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'stayintouch, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF445cf1e276891ecd3740f9ec34907f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <i class="slicon-globe"></i>
                        <a href="{{{website}}}" target="_blank">{{{website}}}</a>
                    </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <i class="slicon-globe"></i>
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('website'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank">';
                $value = $this->resolveValue($context->find('website'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7685ae9be7b5bcbaec0e2d27fc13ee61(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <i class="slicon-phone"></i>
                        <a href="tel:{{{mobile}}}" target="_blank">{{{mobile}}}</a>
                    </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <i class="slicon-phone"></i>
';
                $buffer .= $indent . '                        <a href="tel:';
                $value = $this->resolveValue($context->find('mobile'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank">';
                $value = $this->resolveValue($context->find('mobile'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF174db049d0f3e3c0acdafd45b2f774d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <i class="slicon-envelope"></i>
                        <a href="mailto:{{{mail}}}" target="_blank">{{{mail}}}</a>
                    </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <i class="slicon-envelope"></i>
';
                $buffer .= $indent . '                        <a href="mailto:';
                $value = $this->resolveValue($context->find('mail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank">';
                $value = $this->resolveValue($context->find('mail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section717e9da497aaaaec4cfa8f9997913fa7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{facebook}}}" target="_blank" class="facebook btn">
                    <i class="slicon-social-facebook"></i>
                  </a>
                </li>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('facebook'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="facebook btn">
';
                $buffer .= $indent . '                    <i class="slicon-social-facebook"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section60719e78ea6e626aadec32b787d17da0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{twitter}}}" target="_blank" class="twitter btn">
                    <i class="slicon-social-twitter"></i>
                  </a>
                </li>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('twitter'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="twitter btn">
';
                $buffer .= $indent . '                    <i class="slicon-social-twitter"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe480e3276d238437465408012d79708(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{linkedin}}}" target="_blank" class="linkedin btn">
                    <i class="slicon-social-linkedin"></i>
                  </a>
                </li>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('linkedin'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="linkedin btn">
';
                $buffer .= $indent . '                    <i class="slicon-social-linkedin"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3eb5d36117446ef5ed54fb4b27fcb1c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{youtube}}}" target="_blank" class="youtube btn">
                    <i class="slicon-social-youtube"></i>
                  </a>
                </li>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('youtube'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="youtube btn">
';
                $buffer .= $indent . '                    <i class="slicon-social-youtube"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd2c8df34486582fad7201a68b4ac4b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li>
                  <a href="{{{instagram}}}" target="_blank" class="instagram btn">
                    <i class="slicon-social-instagram"></i>
                  </a>
                </li>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('instagram'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="instagram btn">
';
                $buffer .= $indent . '                    <i class="slicon-social-instagram"></i>
';
                $buffer .= $indent . '                  </a>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section024c58a22cf46c5ea6a43c34f331b770(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li>
                      <a href="https://api.whatsapp.com/send?phone={{{whatsapp}}}" target="_blank" class="whatsapp btn">
                          <i class="fa fa-whatsapp"></i>
                      </a>
                  </li>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <li>
';
                $buffer .= $indent . '                      <a href="https://api.whatsapp.com/send?phone=';
                $value = $this->resolveValue($context->find('whatsapp'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="whatsapp btn">
';
                $buffer .= $indent . '                          <i class="fa fa-whatsapp"></i>
';
                $buffer .= $indent . '                      </a>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section55d81d78447e008ac659b51263a0a8f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <li>
                      <a href="{{{telegram}}}" target="_blank" class="telegram btn">
                      <i class="fa fa-telegram"></i>
                      </a>
                  </li>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <li>
';
                $buffer .= $indent . '                      <a href="';
                $value = $this->resolveValue($context->find('telegram'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="_blank" class="telegram btn">
';
                $buffer .= $indent . '                      <i class="fa fa-telegram"></i>
';
                $buffer .= $indent . '                      </a>
';
                $buffer .= $indent . '                  </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section35f635c8ba97bc48efcfa9ed9dd99cf3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'madewitmoodle, theme_moove';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'madewitmoodle, theme_moove';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
