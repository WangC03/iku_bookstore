/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/
(() => { // webpackBootstrap
    /******/
    var __webpack_modules__ = ({

        /***/ "./app/assets/es6/pages/e-commerce-order-list.js":
        /*!*******************************************************!*\
          !*** ./app/assets/es6/pages/e-commerce-order-list.js ***!
          \*******************************************************/
        /***/ (() => {

            eval("class OrderList {\r\n\r\n    static init() {\r\n        $('.e-commerce-table').DataTable({order: [[1, 'desc']]});\r\n\r\n        $(\"#checkAll\").on('change',function(){\r\n            $('.e-commerce-table input[type=\"checkbox\"]').prop('checked',$(this).is(\":checked\"));\r\n        }); \r\n    }\r\n}\r\n\r\n$(() => { OrderList.init(); });\r\n\r\n\n\n//# sourceURL=webpack://enlink/./app/assets/es6/pages/e-commerce-order-list.js?");

            /***/
        })

        /******/
    });
    /************************************************************************/
    /******/
    /******/ 	// startup
    /******/ 	// Load entry module and return exports
    /******/ 	// This entry module can't be inlined because the eval devtool is used.
    /******/
    var __webpack_exports__ = {};
    /******/
    __webpack_modules__["./app/assets/es6/pages/e-commerce-order-list.js"]();
    /******/
    /******/
})()
;
