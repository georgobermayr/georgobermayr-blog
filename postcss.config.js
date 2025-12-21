const autoprefixer = require( 'autoprefixer' );
const csso = require( 'postcss-csso' );

module.exports = {
	map: {
		inline: false
	},
	plugins: [
		autoprefixer(),
		csso()
	]
};
