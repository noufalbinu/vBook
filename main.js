import VanillaCalendar from 'vanilla-calendar-pro';
import 'vanilla-calendar-pro/build/vanilla-calendar.min.css';

// Initialize the calendar
const calendar = new VanillaCalendar('#calendar');
calendar.init();
// or
// const calendarWithInput = new VanillaCalendar('#calendar-input', { input: true });
// calendarWithInput.init();