import { useForm } from "@inertiajs/vue3"
import { ref } from "vue"
import usePlatform from "./usePlatform"

export default (data = { 
    name: '',
    email: '',
    message: ''
}) => {
    const form = useForm(data)

    const { prefix } = usePlatform()

    const status = ref({
        status: false,
        message: ''
    })

    const send = () => {
        status.value = {
            status: false,
            message: ''
        };

        form.clearErrors();

        form.post(route(`${prefix}.message`), {
            preserveScroll: true,
            onSuccess: () => {
                status.value = {
                    status: true,
                    message: 'Your message has been sent successfully'
                };

                form.reset()
            }
        });
    }

    return { send, form, status} ;
}