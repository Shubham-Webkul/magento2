/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

define([
    'Magento_Ui/js/modal/alert',
    'jquery',
    'jquery/ui',
    'mage/validation'
], function (alert, $) {
    'use strict';

    $.widget('mage.updateShoppingCart', {
        options: {
            validationURL: '',
<<<<<<< HEAD
            eventName: 'updateCartItemQty'
=======
            eventName: 'updateCartItemQty',
            updateCartActionContainer: ''
>>>>>>> 57ffbd948415822d134397699f69411b67bcf7bc
        },

        /** @inheritdoc */
        _create: function () {
            this._on(this.element, {
                'submit': this.onSubmit
            });
        },

        /**
         * Prevents default submit action and calls form validator.
         *
         * @param {Event} event
         * @return {Boolean}
         */
        onSubmit: function (event) {
<<<<<<< HEAD
            if (!this.options.validationURL) {
=======
            var action = this.element.find(this.options.updateCartActionContainer).val();

            if (!this.options.validationURL || action === 'empty_cart') {
>>>>>>> 57ffbd948415822d134397699f69411b67bcf7bc
                return true;
            }

            if (this.isValid()) {
                event.preventDefault();
                this.validateItems(this.options.validationURL, this.element.serialize());
            }

            return false;
        },

        /**
         * Validates requested form.
         *
         * @return {Boolean}
         */
        isValid: function () {
            return this.element.validation() && this.element.validation('isValid');
        },

        /**
         * Validates updated shopping cart data.
         *
         * @param {String} url - request url
         * @param {Object} data - post data for ajax call
         */
        validateItems: function (url, data) {
            $.extend(data, {
                'form_key': $.mage.cookies.get('form_key')
            });

            $.ajax({
                url: url,
                data: data,
                type: 'post',
                dataType: 'json',
                context: this,

                /** @inheritdoc */
                beforeSend: function () {
                    $(document.body).trigger('processStart');
                },

                /** @inheritdoc */
                complete: function () {
                    $(document.body).trigger('processStop');
                }
            })
            .done(function (response) {
                if (response.success) {
                    this.onSuccess();
                } else {
                    this.onError(response);
                }
            })
            .fail(function () {
                this.submitForm();
            });
        },

        /**
         * Form validation succeed.
         */
        onSuccess: function () {
            $(document).trigger('ajax:' + this.options.eventName);
            this.submitForm();
        },

        /**
         * Form validation failed.
         */
        onError: function (response) {
            if (response['error_message']) {
                alert({
                    content: response['error_message']
                });
            } else {
                this.submitForm();
            }
        },

        /**
         * Real submit of validated form.
         */
        submitForm: function () {
            this.element
                .off('submit', this.onSubmit)
                .submit();
        }
    });

    return $.mage.updateShoppingCart;
});
