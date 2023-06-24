const fetch = require('node-fetch');

const url = 'https://api.nylas.com/calendars/availability/consecutive';
const headers = {
  'Accept': 'application/json',
  'Authorization': 'Bearer <ACCESS_TOKEN>',
  'Content-Type': 'application/json',
};

const data = {
  duration_minutes: 30,
  start_time: 1605794400,
  end_time: 1605826800,
  interval_minutes: 10,
  emails: [['swag@nylas.com']],
  free_busy: [
    {
      email: 'swag@nylas.com',
      object: 'free_busy',
      time_slots: [
        {
          start_time: 1605819600,
          end_time: 1605821400,
          object: 'time_slot',
          status: 'busy',
        },
      ],
    },
  ],
  open_hours: [
    {
      emails: ['swag@nylas.com'],
      days: [0, 1],
      timezone: 'America/Chicago',
      start: '10:00',
      end: '14:00',
      object_type: 'open_hours',
    },
  ],
};

fetch(url, {
  method: 'POST',
  headers: headers,
  body: JSON.stringify(data),
})
  .then((response) => response.json())
  .then((data) => console.log(data))
  .catch((error) => console.error(error));
