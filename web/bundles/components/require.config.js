var components = {
    "packages": [
        {
            "name": "backbone",
            "main": "backbone-built.js"
        },
        {
            "name": "jquery",
            "main": "jquery-built.js"
        },
        {
            "name": "underscore",
            "main": "underscore-built.js"
        },
        {
            "name": "moment",
            "main": "moment-built.js"
        },
        {
            "name": "jsplumb",
            "main": "jsplumb-built.js"
        },
        {
            "name": "moment-timezone",
            "main": "moment-timezone-built.js"
        },
        {
            "name": "tinymce",
            "main": "tinymce-built.js"
        }
    ],
    "shim": {
        "backbone": {
            "deps": [
                "underscore"
            ],
            "exports": "Backbone"
        },
        "underscore": {
            "exports": "_"
        }
    },
    "baseUrl": "components"
};
if (typeof require !== "undefined" && require.config) {
    require.config(components);
} else {
    var require = components;
}
if (typeof exports !== "undefined" && typeof module !== "undefined") {
    module.exports = components;
}