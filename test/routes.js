import test from 'ava';
import Rapid from './../resources/assets/js/Interface/Rapid/Rapid';

test('that routeDelimiter will work', t => {

    let postModel = new Rapid({
        modelName: 'PacificCrestTrail',
        routeDelimiter: '_',
        debug: true
    });

    postModel.debugger.logEnabled = false;

    postModel.find(1);
    t.is('api/pacific_crest_trail/1', postModel.debugger.data.lastUrl);

    postModel.all();
    t.is('api/pacific_crest_trails', postModel.debugger.data.lastUrl);

});

test('that caseSensitive will work', t => {

    let postModel = new Rapid({
        modelName: 'PacificCrestTrail',
        caseSensitive: true,
        debug: true
    });

    postModel.debugger.logEnabled = false;

    postModel.find(1);
    t.is('api/PacficCrestTrail/1', postModel.debugger.data.lastUrl);

    postModel.all();
    t.is('api/PacficCrestTrails', postModel.debugger.data.lastUrl);

});
