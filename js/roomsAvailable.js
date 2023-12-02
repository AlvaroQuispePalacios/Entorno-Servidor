const titleRooms = document.querySelector('.titleRooms');
titleRooms.textContent = 'Rooms';

const rooms = document.getElementById('rooms');
const roomsAvailable = document.getElementById('roomsAvailable');

const containerRooms = document.getElementById('containerRooms');
const containerRoomsAvailable = document.getElementById('containerRoomsAvailable');
containerRoomsAvailable.style = 'display:none';

rooms.addEventListener('click', () => {
    titleRooms.textContent = 'Rooms';
    containerRooms.style = 'display:block';
    containerRoomsAvailable.style = 'display:none';
});

roomsAvailable.addEventListener('click', () => {
    titleRooms.textContent = 'Rooms Available';
    containerRoomsAvailable.style = 'display:block';
    containerRooms.style = 'display:none';
});
