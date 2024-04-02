document.addEventListener('DOMContentLoaded', function () {
    const patientList = document.getElementById('patientList');
    const appointmentList = document.getElementById('appointmentList');
    const notificationList = document.getElementById('notificationList');

    // Sample patient information
    const patients = [
        { id: 1, name: 'John Doe', age: 45, condition: 'Diabetes' },
        { id: 2, name: 'Jane Smith', age: 30, condition: 'Hypertension' },
        { id: 3, name: 'Alice Johnson', age: 55, condition: 'Arthritis' }
    ];

    // Sample appointment schedule
    const appointments = [
        { id: 1, patientId: 1, time: '10:00 AM', doctor: 'Dr. Smith' },
        { id: 2, patientId: 2, time: '11:30 AM', doctor: 'Dr. Johnson' },
        { id: 3, patientId: 3, time: '2:00 PM', doctor: 'Dr. Brown' }
    ];

    // Sample notifications
    const notifications = [
        { id: 1, message: 'Appointment reminder: John Doe at 10:00 AM' },
        { id: 2, message: 'New patient appointment scheduled' },
        { id: 3, message: 'Reminder: Take medication' }
    ];

    // Function to display patient information
    function displayPatients() {
        patientList.innerHTML = '';
        patients.forEach(patient => {
            const patientItem = document.createElement('div');
            patientItem.classList.add('info-item');
            patientItem.textContent = `${patient.name} (Age: ${patient.age}, Condition: ${patient.condition})`;
            patientList.appendChild(patientItem);
        });
    }

    // Function to display appointment schedule
    function displayAppointments() {
        appointmentList.innerHTML = '';
        appointments.forEach(appointment => {
            const appointmentItem = document.createElement('div');
            appointmentItem.classList.add('info-item');
            appointmentItem.textContent = `${appointment.time} - ${appointment.doctor}`;
            appointmentList.appendChild(appointmentItem);
        });
    }

    // Function to display notifications
    function displayNotifications() {
        notificationList.innerHTML = '';
        notifications.forEach(notification => {
            const notificationItem = document.createElement('div');
            notificationItem.classList.add('info-item');
            notificationItem.textContent = notification.message;
            notificationList.appendChild(notificationItem);
        });
    }

    // Initial display of data
    displayPatients();
    displayAppointments();
    displayNotifications();
});
