// Modal Activity
const modal_activity = document.getElementById("modal_activity");
const add_activity_btn = document.getElementById("add_activity_btn");
const close_modal_activity = document.getElementById('close_modal_activity');

if (add_activity_btn && modal_activity) {
    add_activity_btn.addEventListener('click', () => {
        if (modal_activity.classList.contains('hidden')) {
            setTimeout(() => {
                modal_activity.classList.remove('hidden');
                modal_activity.classList.add('flex');
            }, 200);
        }
    });
}

if (close_modal_activity && modal_activity) {
    close_modal_activity.addEventListener('click', () => {
        if (modal_activity.classList.contains('flex')) {
            setTimeout(() => {
                modal_activity.classList.remove('flex');
                modal_activity.classList.add('hidden');
            }, 200);
        }
    });
}

// Modal Discussion
const modal_discussion = document.getElementById('modal_discussion');
const add_discussion_btn = document.getElementById('add_discussion_btn');
const close_modal_discussion = document.getElementById('close_modal_discussion');

if (add_discussion_btn && modal_discussion) {
    add_discussion_btn.addEventListener('click', () => {
        if (modal_discussion.classList.contains('hidden')) {
            modal_discussion.classList.remove('hidden');
            modal_discussion.classList.add('flex');
        }
    });
}

if (close_modal_discussion && modal_discussion) {
    close_modal_discussion.addEventListener('click', () => {
        if (modal_discussion.classList.contains('flex')) {
            modal_discussion.classList.remove('flex');
            modal_discussion.classList.add('hidden');
        }
    });
}




