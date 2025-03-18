import './bootstrap';

Echo.channel(`test-message`)
    .listen('.test.message', (e) => {
        console.log('Event received!', e);
    });