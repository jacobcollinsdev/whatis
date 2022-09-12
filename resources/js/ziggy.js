const Ziggy = {"url":"http:\/\/localhost","port":null,"defaults":{},"routes":{"keywords.index":{"uri":"keywords","methods":["GET","HEAD"]},"keywords.create":{"uri":"keywords\/create","methods":["GET","HEAD"]},"keywords.store":{"uri":"keywords","methods":["POST"]},"keywords.show":{"uri":"keywords\/{keyword}","methods":["GET","HEAD"]},"keywords.edit":{"uri":"keywords\/{keyword}\/edit","methods":["GET","HEAD"]},"keywords.update":{"uri":"keywords\/{keyword}","methods":["PUT","PATCH"]},"keywords.destroy":{"uri":"keywords\/{keyword}","methods":["DELETE"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
