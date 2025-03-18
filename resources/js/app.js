import './bootstrap';

console.log('Initializing Echo...');

// on document ready
document.addEventListener('DOMContentLoaded', () => {
    // Log when Echo connects
    // Echo.connector.socket.on('connect', () => {
    //     console.log('Successfully connected to Echo server!');
    // });

    // // Log any connection errors
    // Echo.connector.socket.on('error', (error) => {
    //     console.error('Echo connection error:', error);
    // });

    // // Log when Echo disconnects
    // Echo.connector.socket.on('disconnect', () => {
    //     console.log('Disconnected from Echo server');
    // });

    // // Subscribe to the channel
    // console.log('Subscribing to test-message channel...');
    // const channel = Echo.channel(`test-message`);

    // // Log when the channel is subscribed to
    // channel.subscribed(() => {
    //     console.log('Successfully subscribed to test-message channel');
    // });

    // // Log any subscription errors
    // channel.error((error) => {
    //     console.error('Error subscribing to channel:', error);
    // });

    // Listen for the event
    Echo.channel(`test-message`)
        .listen('.test.message', (e) => {
            console.log('Event received!', e);
        });

});