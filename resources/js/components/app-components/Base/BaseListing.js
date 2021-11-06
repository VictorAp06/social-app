'use strict'

var BaseListing = {
    data() {
        return {
            isLoaded: false,
        }
    },
    mounted() {
        this.isLoaded = true;
    }
}

exports.default = BaseListing;