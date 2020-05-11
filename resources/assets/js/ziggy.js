    var Ziggy = {
        namedRoutes: {"login":{"uri":"login","methods":["GET","HEAD"],"domain":null},"logout":{"uri":"logout","methods":["POST"],"domain":null},"password.request":{"uri":"password\/reset","methods":["GET","HEAD"],"domain":null},"password.email":{"uri":"password\/email","methods":["POST"],"domain":null},"password.reset":{"uri":"password\/reset\/{token}","methods":["GET","HEAD"],"domain":null},"password.update":{"uri":"password\/reset","methods":["POST"],"domain":null},"password.confirm":{"uri":"password\/confirm","methods":["GET","HEAD"],"domain":null},"home":{"uri":"\/","methods":["GET","HEAD"],"domain":null},"dashboardHome":{"uri":"admin\/dashboard","methods":["GET","HEAD"],"domain":null},"questions.index":{"uri":"admin\/questions\/questions","methods":["GET","HEAD"],"domain":null},"questions.create":{"uri":"admin\/questions\/questions\/create","methods":["GET","HEAD"],"domain":null},"questions.store":{"uri":"admin\/questions\/questions","methods":["POST"],"domain":null},"questions.show":{"uri":"admin\/questions\/questions\/{question}","methods":["GET","HEAD"],"domain":null},"questions.edit":{"uri":"admin\/questions\/questions\/{question}\/edit","methods":["GET","HEAD"],"domain":null},"questions.update":{"uri":"admin\/questions\/questions\/{question}","methods":["PUT","PATCH"],"domain":null},"questions.destroy":{"uri":"admin\/questions\/questions\/{question}","methods":["DELETE"],"domain":null},"visitorQuestions":{"uri":"admin\/questions\/visitorQuestions","methods":["GET","HEAD"],"domain":null},"gifts.index":{"uri":"admin\/gifts\/gifts","methods":["GET","HEAD"],"domain":null},"gifts.create":{"uri":"admin\/gifts\/gifts\/create","methods":["GET","HEAD"],"domain":null},"gifts.store":{"uri":"admin\/gifts\/gifts","methods":["POST"],"domain":null},"gifts.show":{"uri":"admin\/gifts\/gifts\/{gift}","methods":["GET","HEAD"],"domain":null},"gifts.edit":{"uri":"admin\/gifts\/gifts\/{gift}\/edit","methods":["GET","HEAD"],"domain":null},"gifts.update":{"uri":"admin\/gifts\/gifts\/{gift}","methods":["PUT","PATCH"],"domain":null},"gifts.destroy":{"uri":"admin\/gifts\/gifts\/{gift}","methods":["DELETE"],"domain":null},"settings.index":{"uri":"admin\/settings\/settings","methods":["GET","HEAD"],"domain":null},"settings.create":{"uri":"admin\/settings\/settings\/create","methods":["GET","HEAD"],"domain":null},"settings.store":{"uri":"admin\/settings\/settings","methods":["POST"],"domain":null},"settings.show":{"uri":"admin\/settings\/settings\/{setting}","methods":["GET","HEAD"],"domain":null},"settings.edit":{"uri":"admin\/settings\/settings\/{setting}\/edit","methods":["GET","HEAD"],"domain":null},"settings.update":{"uri":"admin\/settings\/settings\/{setting}","methods":["PUT","PATCH"],"domain":null},"settings.destroy":{"uri":"admin\/settings\/settings\/{setting}","methods":["DELETE"],"domain":null},"banners.index":{"uri":"admin\/banners\/banners","methods":["GET","HEAD"],"domain":null},"banners.show":{"uri":"admin\/banners\/banners\/{banner}","methods":["GET","HEAD"],"domain":null},"banners.edit":{"uri":"admin\/banners\/banners\/{banner}\/edit","methods":["GET","HEAD"],"domain":null},"banners.update":{"uri":"admin\/banners\/banners\/{banner}","methods":["PUT","PATCH"],"domain":null},"contact.index":{"uri":"admin\/contact\/contact","methods":["GET","HEAD"],"domain":null},"contact.create":{"uri":"admin\/contact\/contact\/create","methods":["GET","HEAD"],"domain":null},"contact.store":{"uri":"admin\/contact\/contact","methods":["POST"],"domain":null},"contact.show":{"uri":"admin\/contact\/contact\/{contact}","methods":["GET","HEAD"],"domain":null},"contact.edit":{"uri":"admin\/contact\/contact\/{contact}\/edit","methods":["GET","HEAD"],"domain":null},"contact.update":{"uri":"admin\/contact\/contact\/{contact}","methods":["PUT","PATCH"],"domain":null},"contact.destroy":{"uri":"admin\/contact\/contact\/{contact}","methods":["DELETE"],"domain":null},"respond.get":{"uri":"admin\/contact\/respondTo\/{contact}","methods":["GET","HEAD"],"domain":null},"respond.post":{"uri":"admin\/contact\/respondTo\/{contact}","methods":["POST"],"domain":null}},
        baseUrl: 'http://localhost/',
        baseProtocol: 'http',
        baseDomain: 'localhost',
        basePort: false,
        defaultParameters: []
    };

    if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
        for (var name in window.Ziggy.namedRoutes) {
            Ziggy.namedRoutes[name] = window.Ziggy.namedRoutes[name];
        }
    }

    export {
        Ziggy
    }