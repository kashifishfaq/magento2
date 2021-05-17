<?php
/**
 * Copyright © 2017 Codazon, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Codazon\ThemeLayoutPro\Block\Adminhtml\Footer\Edit\Button;

use Magento\Ui\Component\Control\Container;

/**
 * Class Save
 */
class Delete extends Generic
{
    /**
     * {@inheritdoc}
     */
    public function getButtonData()
    {
        if ($this->getFooter()->getId()) {
            return [
                'label' => __('Delete'),
                'class' => 'delete',
                'on_click' => 'deleteConfirm(\'' . __(
                        'Are you sure you want to do this?'
                    ) . '\', \'' . $this->getDeleteUrl() . '\')',
                'sort_order' => 11
            ];
        }
        return [];
    }
    
    public function getDeleteUrl()
    {
        return $this->getUrl('*/*/delete', ['footer_id' => $this->getFooter()->getId()]);
    }
}
