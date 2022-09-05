/**
 * IMPORTANT: DO NOT MODIFY COMPBINED VERSION. MODIFY filename-origin.js INSTEAD
 *
 * Route setting with exact path name.
 * This precedes regex route checking
 *
 * This is also used by service worker to determine what routes are SPA compatible
 */

/**
 * Default settings if exact and regex route mapping cannot be found
 */
const routeDefaults = {
    bodyClass: 'index',
    backBtn: {
        valid: true,
        dest: '/',
    },
    header: {
        valid: true,
    },
    menu: {
        valid: false, // must be false to accomodate 404
    },
    // footer: true,
    isSpa: false,
    // asyncDone: false,
};


/**
 * Route setting with exact uri check. No regex allowed
 */
const exactRoutes = {
    '/': {
        bodyClass() { return user.completedRegistration ? 'mypair' : 'index' },
        backBtn: {
            text: '最新名單',
            dest: '/',
        },
        menu: {
            valid: function(){ return user.completedRegistration ? true : false; },
            highlight: 'matches',
        },
        isSpa: true,
        // asyncDone: true,
    },

    '/friends': {
        bodyClass() { return user.completedRegistration ? 'mypair' : 'index' },
        backBtn: {
            text: '我的朋友',
            dest: '/',
        },
        menu: {
            valid: true,
            highlight: 'friends',
        },
        isSpa: true,
        // asyncDone: true,
    },

    '/datings': {
        bodyClass() { return user.completedRegistration ? 'mypair' : 'index' },
        backBtn: {
            text: '我的約會',
            dest: '/',
        },
        menu: {
            valid: true,
            highlight: 'datings',
        },
        isSpa: true,
        // asyncDone: true,
    },

    '/member/profile': {
        bodyClass: 'member',
        backBtn: {
            text: '我的檔案',
            dest: '/',
        },
        menu: {valid: true},
        isSpa: true,
        // asyncDone: true,
    },

    '/photo-editor': {
        bodyClass: 'popBody',
        backBtn: {
            text: '照片裁切',
            dest: '/member/profile',
        },
        menu: {valid: true},
        isSpa: true,
        // asyncDone: true,
    },

    '/quizzes': {
        bodyClass: 'psycho_test',
        backBtn: {
            text: '我的測驗',
            dest: '/',
        },
        menu: {
            valid: true,
            highlight: 'quizzes',
        },
        isSpa: true,
    },

    '/quizzes/match/report': {
        bodyClass: 'testingReport',
        backBtn: {
            text: '配對報告',
            dest: '/quizzes',
        },
        menu: {
            valid: true,
            highlight: 'quizzes',
        },
        isSpa: true,
    },

    '/quizzes/personality/report': {
        bodyClass: 'testingReport',
        backBtn: {
            text: '性格報告',
            dest: '/quizzes',
        },
        menu: {
            valid: true,
            highlight: 'quizzes',
        },
        isSpa: true,
    },

    '/quizzes/love-word/report': {
        bodyClass: 'testingReport',
        backBtn: {
            text: '愛之語報告',
            dest: '/quizzes',
        },
        menu: {
            valid: true,
            highlight: 'quizzes',
        },
        isSpa: true,
    },

    '/quizzes/love-style/report': {
        bodyClass: 'testingReport',
        backBtn: {
            text: '愛情風格報告',
            dest: '/quizzes',
        },
        menu: {
            valid: true,
            highlight: 'quizzes',
        },
        isSpa: true,
    },

    '/quizzes/travel/report': {
        bodyClass: 'testingReport',
        backBtn: {
            text: '旅伴報告',
            dest: '/quizzes',
        },
        menu: {
            valid: true,
            highlight: 'quizzes',
        },
        isSpa: true,
    },

    '/article': {
        bodyClass: 'articlelist',
        backBtn: {
            text: '閱讀愛情',
        },
        menu: {
            valid: true,
            highlight: 'article',
        },
        isSpa: true,
        // asyncDone: true,
    },

    '/chat-center': {
        bodyClass: 'chatlist',
        backBtn: {
            text: '訊息',
            dest: '/',
        },
        menu: {
            valid: true,
            highlight: 'chat-center',
        },
        isSpa: true,
    },

    '/notification-center': {
        bodyClass: 'noticelist',
        backBtn: {
            text: '通知',
            dest: '/',
        },
        menu: {
            valid: true,
            highlight: 'notification-center',
        },
        isSpa: true,
    },

    // Payment and trial
    '/premium': {
        bodyClass: 'deposit',
        backBtn: {
            text: '會員加值',
            dest: '/',
        },
        menu: {
            valid: true,
            highlight: 'premium',
        },
        isSpa: false,
    },

    '/premium/payment-success': {
        bodyClass: 'deposit',
        backBtn: {
            text: '付款成功',
            dest: '/premium',
        },
        menu: {
            valid: true,
            highlight: 'premium',
        },
        isSpa: false,
    },

    '/premium/payment-failed': {
        bodyClass: 'deposit',
        backBtn: {
            text: '付款失敗',
            dest: '/premium',
        },
        menu: {
            valid: true,
            highlight: 'premium',
        },
        isSpa: false,
    },

    // Payment and trial
    '/premium-page': {
        bodyClass: 'deposit',
        backBtn: {
            text: '會員加值',
            dest: '/',
        },
        menu: {
            valid: true,
            highlight: 'premium',
        },
        isSpa: false,
    },

    '/transaction-histories': {
        bodyClass: 'deposit',
        backBtn: {
            text: '交易記錄',
            dest: '/',
        },
        menu: {
            valid: true,
            highlight: 'premium',
        },
        isSpa: false,
    },

    '/tickets': {
        bodyClass: 'deposit',
        backBtn: {
            text: '我的票卷',
            dest: '/',
        },
        isSpa: false,
    },

    '/free-trial': {
        bodyClass: 'mission_try',
        backBtn: {
            text: '免費試用',
            dest: 'back',
        },
        // menu: {
        //     valid: false,
        // },
        isSpa: false,
    },

    // Registration
    '/register': {
        bodyClass: 'signin',
        isSpa: false,
        menu: {valid: true},
    },

    '/signin': {
        bodyClass: 'signup',
        menu: {valid: true},
        isSpa: false,
    },

    '/mobile_send_form': {
        bodyClass: 'signdata',
        menu: {valid: true},
        isSpa: false,
    },

    '/member_portrait': {
        bodyClass: 'signdata',
        menu: {valid: true},
        isSpa: true,
    },

    '/line_account_link': {
        bodyClass: 'signdata',
        menu: {valid: true},
        isSpa: true,
    },

    '/signin_affidavit': {
        bodyClass: 'signdata signdataInfo',
        menu: {valid: true},
        isSpa: false,
    },

    // Static (remove index bodyClass as it mess up with mobile menu)
    '/about': {
        bodyClass: 'static',
        menu: {valid: true},
        backBtn: {
            text: '關於我們',
            dest: 'back',
        },
        isSpa: true,
    },
    '/faq': {
        bodyClass: 'static',
        menu: {valid: true},
        backBtn: {
            text: '常見問題',
            dest: 'back',
        },
        isSpa: true,
    },
    '/contact': {
        bodyClass: 'static',
        menu: {valid: true},
        backBtn: {
            text: '聯絡我們',
            dest: 'back',
        },
        isSpa: true,
    },
    '/term-of-license': {
        bodyClass: 'static',
        menu: {valid: true},
        backBtn: {
            text: '使用條款',
            dest: 'back',
        },
        isSpa: true,
    },
    '/privacy-policies': {
        bodyClass: 'static',
        menu: {valid: true},
        backBtn: {
            text: '隱私權政策',
            dest: 'back',
        },
        isSpa: true,
    },
    '/meetchat-skill': {
        bodyClass: 'static',
        menu: {valid: true},
        backBtn: {
            text: '聊天技巧',
            dest: 'back',
        },
        isSpa: true,
    },
};


/**
 * Route setting with regular expression name.
 * This comes after exact route checking
 */
const regexRoutes = {
    '\/landing\-page\/*': {
        bodyClass(){ return 'index'; },
        backBtn: {
            text: 'meettheone',
            dest: '/',
        },
        menu: {valid: false},
        // footer: false,
        isSpa: true,
        // asyncDone: true,
    },
    '\/member\/setting\/*': {
        bodyClass: 'settingPage',
        backBtn: {
            text: '我的設定',
        },
        menu: {valid: true},
        // footer: false,
        isSpa: true,
        // asyncDone: true,
    },

    '^\/matches\/*\/love-word-report': {
        bodyClass: 'mypair',
        backBtn: {
            text: '愛之語報告',
            dest: '/matches',
        },
        menu: {
            valid: true,
            highlight: 'matches',
        },
        isSpa: true,
        // asyncDone: true,
    },

    '^\/matches\/*\/travel-report': {
        bodyClass: 'mypair',
        backBtn: {
            text: '旅伴報告',
            dest: '/matches',
        },
        menu: {
            valid: true,
            highlight: 'matches',
        },
        isSpa: true,
        // asyncDone: true,
    },

    '^\/matches\/*': {
        bodyClass: 'mypair',
        backBtn: {
            text: '契合報告',
            dest: '/',
        },
        menu: {
            valid: true,
            highlight: 'matches',
        },
        // footer: false,
        isSpa: true,
        // asyncDone: true,
    },

    '^\/friends\/*\/love-word-report': {
        bodyClass: 'mypair',
        backBtn: {
            text: '愛之語報告',
            dest: '/friends',
        },
        menu: {
            valid: true,
            highlight: 'friends',
        },
        isSpa: true,
        // asyncDone: true,
    },

    '^\/friends\/*\/travel-report': {
        bodyClass: 'mypair',
        backBtn: {
            text: '旅伴報告',
            dest: '/friends',
        },
        menu: {
            valid: true,
            highlight: 'friends',
        },
        isSpa: true,
        // asyncDone: true,
    },

    '^\/friends\/*': {
        bodyClass: 'mypair',
        backBtn: {
            text: '我的朋友',
            dest: '/friends',
        },
        menu: {
            valid: true,
            highlight: 'friends',
        },
        // footer: false,
        isSpa: true,
        // asyncDone: true,
    },
    '^\/chat-room\/*': {
        bodyClass: 'chatroom',
        backBtn: {
            valid: false,
        },
        menu: {valid: true},
        // footer: false,
        isSpa: true,
    },

    '^\/member_portrait\/*': {
        bodyClass: 'signdata',
        menu: {valid: true},
        isSpa: true,
    },

    '^\/quizzes\/personality*': {
        bodyClass: 'testingReport',
        backBtn: {
            text: '性格測驗',
            dest: '/quizzes',
        },
        menu: {
            valid: true,
            highlight: 'quizzes',
        },
        isSpa: true,
    },

    '^\/quizzes\/love-word*': {
        bodyClass: 'testingReport',
        backBtn: {
            text: '愛之語測驗',
            dest: '/quizzes',
        },
        menu: {
            valid: true,
            highlight: 'quizzes',
        },
        isSpa: true,
    },

    '^\/quizzes\/love-style*': {
        bodyClass: 'testingReport',
        backBtn: {
            text: '愛情風格測驗',
            dest: '/quizzes',
        },
        menu: {
            valid: true,
            highlight: 'quizzes',
        },
        isSpa: true,
    },

    '^\/quizzes\/travel*': {
        bodyClass: 'testingReport',
        backBtn: {
            text: '旅伴測驗',
            dest: '/quizzes',
        },
        menu: {
            valid: true,
            highlight: 'quizzes',
        },
        isSpa: true,
    },

    // '\/quizzes\/*': {
    //     bodyClass: 'testingReport',
    //     backBtn: {
    //         text: '我的測驗',
    //     },
    //     menu: {
    //         valid: true,
    //         highlight: 'quizzes',
    //     },
    //     isSpa: false,
    // },

    '\/article\/*': {
        bodyClass: 'article',
        backBtn: {
            text: '閱讀愛情',
        },
        menu: {
            valid: true,
            highlight: 'article',
        },
        isSpa: true,
        // asyncDone: true,
    },

    // Payment
    '\/transaction-histories\/*': {
        bodyClass: 'deposit',
        backBtn: {
            text: '交易記錄',
            dest: '/transaction-histories',
        },
        menu: {
            valid: true,
            highlight: 'premium',
        },
        isSpa: false,
    },

    '\/tickets\/*': {
        bodyClass: 'deposit',
        backBtn: {
            text: '我的票卷',
            dest: '/tickets',
        },
        menu: {
            valid: true,
            highlight: 'premium',
        },
        isSpa: false,
    },

    // Registration
    '\/show_*': {
        bodyClass: 'testing_pairs',
        menu: {valid: true},
        isSpa: false,
    },

    '\/b2_*': {
        bodyClass: 'signin',
        menu: {valid: true},
        isSpa: false,
    },

    '\/fb-*': {
        bodyClass: 'signin',
        menu: {valid: true},
        isSpa: false,
    },

    '\/login': {
        bodyClass: 'signin',
        menu: {valid: true},
        isSpa: false,
    },

    '\/line\/link\/*': {
        bodyClass: 'signin',
        menu: {valid: true},
        isSpa: false,
    },

    '^\/demo\/(male|female)': {
        bodyClass: 'index',
        header: {valid: false},
        menu: {valid: false},
        isSpa: false,
    },
    '^\/demo\/(male|female)\/matches\/*': {
        bodyClass: 'index',
        header: {valid: false},
        menu: {valid: false},
        isSpa: false,
    },
    '^\/demo\/(male|female)\/quizzes': {
        bodyClass: 'index',
        header: {valid: false},
        menu: {valid: false},
        isSpa: false,
    },
    '^\/demo\/(male|female)\/quizzes\/*': {
        bodyClass: 'index',
        header: {valid: false},
        menu: {valid: false},
        isSpa: false,
    },
};
self.exactRoutes   = exactRoutes;
self.regexRoutes   = regexRoutes;
self.routeDefaults = routeDefaults;
