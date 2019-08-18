var Encore = require('@symfony/webpack-encore');

Encore
  .setOutputPath('public/assets/')

  .setPublicPath('/assets')

  // .addEntry('app', './assets/js/app.js')
  .addStyleEntry('css/dashboard', ['./assets/css/dashboard.css'])
  .addStyleEntry('css/login', ['./assets/css/login.css'])

  // .enableSingleRuntimeChunk()

  // .cleanupOutputBeforeBuild()
  // .enableSourceMaps(!Encore.isProduction())
  // .enableVersioning(Encore.isProduction())


;

module.exports = Encore.getWebpackConfig();