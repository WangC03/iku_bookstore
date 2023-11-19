'use strict';

var _ = require('../lib/helper.js');
var cls = require('../lib/class.js');
var instances = require('./instances.js');
var updateGeometry = require('./update-geometry.js');

// Handlers
var handlers = {
  'click-rail': require('./handler/click-rail.js'),
  'drag-scrollbar': require('./handler/drag-scrollbar.js'),
  'keyboard': require('./handler/keyboard.js'),
  'wheel': require('./handler/mouse-wheel.js'),
  'touch': require('./handler/touch.js'),
  'selection': require('./handler/selection.js')
};
var nativeScrollHandler = require('./handler/native-scroll.js');

module.exports = function (element, userSettings) {
  userSettings = typeof userSettings === 'object' ? userSettings : {};

  cls.add(element, 'ps-container');

  // Create a plugin instance.
  var i = instances.add(element);

  i.settings = _.extend(i.settings, userSettings);
  cls.add(element, 'ps-theme-' + i.settings.theme);

  i.settings.handlers.forEach(function (handlerName) {
    handlers[handlerName](element);
  });

  nativeScrollHandler(element);

  updateGeometry(element);
};
