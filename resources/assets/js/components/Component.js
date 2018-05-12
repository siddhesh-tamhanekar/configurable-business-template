import bulmaModal from "./bulma/Modal"
import bulmaText from "./bulma/Text"
import bulmaTextArea from "./bulma/Textarea"

export default Vue.extend({
    components:{bulmaText,bulmaTextArea,bulmaModal},

    data(){
        return {
            editing:false,
        }
    },

    created() {
        axios.get("get/"+this.type).then(({data}) => {
            console.log(data)
            if(data.id){
                this.data = data.config
                this.data.id = data.id

            }
        });
    },

    methods:{
        save() {
            axios.post("store/"+this.type,{formData:this.data})
            .then(({data}) => {
                console.log("stored successfuly")
            })

        },
        addItem() {
            let index = this.data.items.length
            if(this.editing !== false)
                index = this.editing
            else
                this.data.items.push({})
            console.log("editing", index)
            for(let i in this.formData) {
                this.data.items[index][i] = this.formData[i]
                 this.formData[i] = "";
            }
            this.editing = false
            this.openModal = false
        },

        deleteItem(index){
            this.data.items.splice(index,1);
        },

        editItem(index){
            console.log("editing ",index,this.data.items[index])
            for(let i in this.data.items[index])
                this.formData[i] = this.data.items[index][i]

            this.editing = index
            this.openModal = true
        }
    }
})