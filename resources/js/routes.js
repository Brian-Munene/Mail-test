import AllEmails from "./components/AllEmails.vue";
import AddEmail from "./components/AddEmail.vue";
import UpdateEmail from "./components/UpdateEmail.vue";

export const routes = [
    {
        name: "home",
        path: "/",
        component: AllEmails
    },
    {
        name: "add",
        path: "/add",
        component: AddEmail
    },
    {
        name: "edit",
        path: "/edit/:id",
        component: UpdateEmail
    }
];
