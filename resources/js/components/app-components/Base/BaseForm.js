'use strict'

var BaseForm = {
    data() {
        return {
            isLoaded: false,
        }
    },
    mounted() {
        this.isLoaded = true;
    }
}

exports.default = BaseForm;