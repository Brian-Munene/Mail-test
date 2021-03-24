import AllEmails from "./components/all_emails.vue";
import AddEmail from "./components/add_email.vue";
import UpdateEmail from "./components/update_email.vue";

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
