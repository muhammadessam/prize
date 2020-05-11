<template>
    <div>
        <div>
            <button class="btn btn-primary btn_start" type="button" @click="">إبدء الآن</button>
        </div>
        <div class="col-md-12">
            <div class="div_content_quits">
                <ul class="list-group" v-for="question in questions">
                    <li class="list-group-item li_header"><span>{{question.question}}</span>
                    </li>
                    <li class="list-group-item li_menu"><span>{{question.a1}}</span></li>
                    <li class="list-group-item li_menu"><span>{{question.a2}}</span></li>
                    <li class="list-group-item li_menu"><span>{{question.a3}}</span></li>
                    <li class="list-group-item li_menu"><span>{{question.correct}}</span></li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                questions: [],
            }
        },
        mounted() {
            window.axios.get(route('visitorQuestions')).then((res) => {
                this.questions = res.data;
            });
        }
    }
</script>
