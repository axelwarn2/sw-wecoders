{"version":3,"file":"lazyload.bundle.map.js","names":["exports","ui_vue","WATCH","LOADING","SUCCESS","ERROR","HIDDEN","BLANK_IMAGE","lazyloadObserver","lazyloadLoadImage","currentImage","callback","SUCCESS_CLASS","dataset","lazyloadSuccessClass","split","concat","babelHelpers","toConsumableArray","ERROR_CLASS","lazyloadErrorClass","classList","add","newImage","Image","src","lazyloadSrc","lazyloadHiddenSrc","onload","_currentImage$classLi","contains","remove","apply","lazyloadCallback","element","state","onerror","_currentImage$classLi2","title","alt","lazyloadDontHide","unobserve","window","IntersectionObserver","entries","observer","forEach","entry","target","isIntersecting","threshold","BitrixVue","directive","bind","bindings","value","location","href","replace","hash","observe","componentUpdated","startsWith","url","document","createElement","unbind","this","BX"],"sources":["lazyload.bundle.js"],"mappings":"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"}