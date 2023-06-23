module.exports = {
	extends: ["stylelint-config-standard",
		"stylelint-config-rational-order",
		"stylelint-prettier/recommended"
	],
	plugins: ["stylelint-order", "stylelint-scss", "stylelint-no-unresolved-module"],
	rules: {
		"media-feature-range-notation": "prefix",
		order: ["custom-properties",
			"declarations"
		],
		 "color-no-invalid-hex": true,
		 "color-named": "never",
		 "function-whitelist": ["calc", "url"],
		"plugin/no-unresolved-module": {
			"alias": {
				"assets": "pebbles"
			},
			"modules": ["node_modules", "local_modules"]
		}
	},
	
};