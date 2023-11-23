<?php

class __Mustache_bec962f6f5c42dde8b3b383089b3a6cc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('core/popover_region')) {
            $context->pushBlockContext(array(
                'classes' => array($this, 'block4100c75ced44c533f753c4400abe0aa9'),
                'attributes' => array($this, 'block4d7b943ed8bdd2f896f38565eeba9834'),
                'togglelabel' => array($this, 'blockA4a032e2fb4bbeacc77bd5a0970030ca'),
                'togglecontent' => array($this, 'blockC1a3df54070032acd71be7327c558fa5'),
                'containerlabel' => array($this, 'blockF6d8c93b345b7eb17ebfdd116a81a5d9'),
                'headertext' => array($this, 'block2dccea8523966aa03bc51b5c4aafc01b'),
                'headeractions' => array($this, 'block42c6bbc6ce4284b24b5271001f172806'),
                'content' => array($this, 'block8574f609b05883305ebdf85b73a43a8c'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $value = $context->find('js');
        $buffer .= $this->section1e02dd49ba0062c8210c243648dbf424($context, $indent, $value);

        return $buffer;
    }

    private function sectionE9d311101fe112f08c4725ee17f65ad1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' shownotificationwindownonew, message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' shownotificationwindownonew, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c7f52d273f99ea528e3a7b6f56728eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' togglenotificationmenu, message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' togglenotificationmenu, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb70af33b8011de7432c8334305b6a62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notificationwindow, message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' notificationwindow, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0485fa7464a648704afa92570f0944b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notifications, message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notifications, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD52891bef9837f9da27028964220b7a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' markallread ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' markallread ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5c109cc11ee011897152888aaf4973ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notificationpreferences, message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notificationpreferences, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7fd8a95ce9a614b8c5bab7e83009f0ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nonotifications, message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nonotifications, message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1e02dd49ba0062c8210c243648dbf424(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\', \'message_popup/notification_popover_controller\'], function($, controller) {
    var container = $(\'#nav-notification-popover-container\');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\', \'message_popup/notification_popover_controller\'], function($, controller) {
';
                $buffer .= $indent . '    var container = $(\'#nav-notification-popover-container\');
';
                $buffer .= $indent . '    var controller = new controller(container);
';
                $buffer .= $indent . '    controller.registerEventListeners();
';
                $buffer .= $indent . '    controller.registerListNavigationEventListeners();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block4100c75ced44c533f753c4400abe0aa9($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'popover-region-notifications';
    
        return $buffer;
    }

    public function block4d7b943ed8bdd2f896f38565eeba9834($context)
    {
        $indent = $buffer = '';
        $buffer .= 'id="nav-notification-popover-container" data-userid="';
        $value = $this->resolveValue($context->find('userid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
    
        return $buffer;
    }

    public function blockA4a032e2fb4bbeacc77bd5a0970030ca($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionE9d311101fe112f08c4725ee17f65ad1($context, $indent, $value);
    
        return $buffer;
    }

    public function blockC1a3df54070032acd71be7327c558fa5($context)
    {
        $indent = $buffer = '';
        $buffer .= '        <i class="slicon-bell" title="';
        $value = $context->find('str');
        $buffer .= $this->section2c7f52d273f99ea528e3a7b6f56728eb($context, $indent, $value);
        $buffer .= '"></i>
';
        $buffer .= $indent . '        <div class="count-container ';
        $value = $context->find('unreadcount');
        if (empty($value)) {
            
            $buffer .= 'hidden';
        }
        $buffer .= '" data-region="count-container">';
        $value = $this->resolveValue($context->find('unreadcount'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</div>
';
    
        return $buffer;
    }

    public function blockF6d8c93b345b7eb17ebfdd116a81a5d9($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionEb70af33b8011de7432c8334305b6a62($context, $indent, $value);
    
        return $buffer;
    }

    public function block2dccea8523966aa03bc51b5c4aafc01b($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section0485fa7464a648704afa92570f0944b7($context, $indent, $value);
    
        return $buffer;
    }

    public function block2f827136a5b369dd8a065b4d57f5a393($context)
    {
        $indent = $buffer = '';
        $buffer .= '                <a class="mark-all-read-button"
';
        $buffer .= $indent . '                    href="#"
';
        $buffer .= $indent . '                    title="';
        $value = $context->find('str');
        $buffer .= $this->sectionD52891bef9837f9da27028964220b7a5($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '                    data-action="mark-all-read"
';
        $buffer .= $indent . '                    role="button">
';
        $buffer .= $indent . '                    <span class="normal-icon"><i class="slicon-check" alt="';
        $value = $context->find('str');
        $buffer .= $this->sectionD52891bef9837f9da27028964220b7a5($context, $indent, $value);
        $buffer .= '"></i></span>
';
        if ($partial = $this->mustache->loadPartial('core/loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </a>
';
    
        return $buffer;
    }

    public function blockF5fda9ca2eeeb46989d43f1b49542ba3($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionD52891bef9837f9da27028964220b7a5($context, $indent, $value);
    
        return $buffer;
    }

    public function block1dc0f3bc8bd4499e7da4476a2c5f1579($context)
    {
        $indent = $buffer = '';
        $buffer .= '                <a href="';
        $value = $this->resolveValue($context->findDot('urls.preferences'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '"
';
        $buffer .= $indent . '                    title="';
        $value = $context->find('str');
        $buffer .= $this->section5c109cc11ee011897152888aaf4973ba($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    <i class="slicon-settings" alt="';
        $value = $context->find('str');
        $buffer .= $this->section5c109cc11ee011897152888aaf4973ba($context, $indent, $value);
        $buffer .= '"></i>
';
        $buffer .= $indent . '                </a>
';
    
        return $buffer;
    }

    public function block686d45a6bda96f8481d3df1bd3bf8d9e($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section5c109cc11ee011897152888aaf4973ba($context, $indent, $value);
    
        return $buffer;
    }

    public function block42c6bbc6ce4284b24b5271001f172806($context)
    {
        $indent = $buffer = '';
        $buffer .= '        ';
        if ($parent = $this->mustache->loadPartial('core/hover_tooltip')) {
            $context->pushBlockContext(array(
                'anchor' => array($this, 'block2f827136a5b369dd8a065b4d57f5a393'),
                'tooltip' => array($this, 'blockF5fda9ca2eeeb46989d43f1b49542ba3'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
        $buffer .= $indent . '        ';
        if ($parent = $this->mustache->loadPartial('core/hover_tooltip')) {
            $context->pushBlockContext(array(
                'anchor' => array($this, 'block1dc0f3bc8bd4499e7da4476a2c5f1579'),
                'tooltip' => array($this, 'block686d45a6bda96f8481d3df1bd3bf8d9e'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }
    
        return $buffer;
    }

    public function block8574f609b05883305ebdf85b73a43a8c($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . '        <div class="all-notifications"
';
        $buffer .= $indent . '            data-region="all-notifications"
';
        $buffer .= $indent . '            role="log"
';
        $buffer .= $indent . '            aria-busy="false"
';
        $buffer .= $indent . '            aria-atomic="false"
';
        $buffer .= $indent . '            aria-relevant="additions"></div>
';
        $buffer .= $indent . '        <div class="empty-message" tabindex="0" data-region="empty-message">';
        $value = $context->find('str');
        $buffer .= $this->section7fd8a95ce9a614b8c5bab7e83009f0ca($context, $indent, $value);
        $buffer .= '</div>
';
    
        return $buffer;
    }
}
