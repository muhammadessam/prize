<template>
    <div>
        <div style="height: 400px;" class="d-flex justify-content-center align-items-center" v-if="!start">
            <button class="btn btn-primary btn_start" type="button" @click="start=true; show[0]=true">إبدء الآن</button>
        </div>

        <div style="height: 400px;" class="d-flex justify-content-center align-items-center" v-if="last">
            <button @click="result" class="btn btn-primary btn_start" type="button">احصل علي جائزتك</button>
        </div>
        <div class="col-md-12" v-for="(question, index) in questions" v-if="show[index] && randomAnswers==0">
            {{randomAnswers = Math.floor(Math.random()*3)}}
            <div class="div_content_quits">
                <ul class="list-group">
                    <li class="list-group-item li_header"><span>{{question.question}}</span>
                    </li>
                    <li v-if="question.a1!=null" @click="answer(question, question.a1, index)"
                        class="list-group-item li_menu">
                        <span>{{question.a1}}</span></li>
                    <li v-if="question.a2!=null" @click="answer(question, question.a2, index)"
                        class="list-group-item li_menu">
                        <span>{{question.a2}}</span></li>
                    <li v-if="question.a3!=null" @click="answer(question, question.a3, index)"
                        class="list-group-item li_menu">
                        <span>{{question.a3}}</span></li>
                    <li v-if="question.correct!=null" @click="answer(question, question.correct, index)"
                        class="list-group-item li_menu"><span>{{question.correct}}</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-12" v-for="(question, index) in questions" v-if="show[index] && randomAnswers==1">
            {{randomAnswers = Math.floor(Math.random()*4)}}
            <div class="div_content_quits">
                <ul class="list-group">
                    <li class="list-group-item li_header"><span>{{question.question}}</span>
                    </li>
                    <li v-if="question.correct!=null" @click="answer(question, question.correct, index)"
                        class="list-group-item li_menu"><span>{{question.correct}}</span>
                    </li>
                    <li v-if="question.a1!=null" @click="answer(question, question.a1, index)"
                        class="list-group-item li_menu">
                        <span>{{question.a1}}</span></li>
                    <li v-if="question.a2!=null" @click="answer(question, question.a2, index)"
                        class="list-group-item li_menu">
                        <span>{{question.a2}}</span></li>
                    <li v-if="question.a3!=null" @click="answer(question, question.a3, index)"
                        class="list-group-item li_menu">
                        <span>{{question.a3}}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-md-12" v-for="(question, index) in questions" v-if="show[index] && randomAnswers==2">
            {{randomAnswers = Math.floor(Math.random()*4)}}
            <div class="div_content_quits">
                <ul class="list-group">
                    <li class="list-group-item li_header"><span>{{question.question}}</span>
                    </li>
                    <li v-if="question.a1!=null" @click="answer(question, question.a1, index)"
                        class="list-group-item li_menu">
                        <span>{{question.a1}}</span></li>
                    <li v-if="question.correct!=null" @click="answer(question, question.correct, index)"
                        class="list-group-item li_menu"><span>{{question.correct}}</span>
                    </li>
                    <li v-if="question.a2!=null" @click="answer(question, question.a2, index)"
                        class="list-group-item li_menu">
                        <span>{{question.a2}}</span></li>
                    <li v-if="question.a3!=null" @click="answer(question, question.a3, index)"
                        class="list-group-item li_menu">
                        <span>{{question.a3}}</span></li>

                </ul>
            </div>
        </div>
        <div class="col-md-12" v-for="(question, index) in questions" v-if="show[index] && randomAnswers==3">
            {{randomAnswers = Math.floor(Math.random()*4)}}
            <div class="div_content_quits">
                <ul class="list-group">
                    <li class="list-group-item li_header"><span>{{question.question}}</span>
                    </li>
                    <li v-if="question.a1!=null" @click="answer(question, question.a1, index)"
                        class="list-group-item li_menu">
                        <span>{{question.a1}}</span></li>
                    <li v-if="question.a2!=null" @click="answer(question, question.a2, index)"
                        class="list-group-item li_menu">
                        <span>{{question.a2}}</span></li>
                    <li v-if="question.correct!=null" @click="answer(question, question.correct, index)"
                        class="list-group-item li_menu"><span>{{question.correct}}</span>
                    </li>
                    <li v-if="question.a3!=null" @click="answer(question, question.a3, index)"
                        class="list-group-item li_menu">
                        <span>{{question.a3}}</span></li>

                </ul>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                show: [false, false, false, false],
                start: false,
                last: false,
                questions: [],
                randomAnswers: 0,
                res: 0,
            }
        },
        methods: {
            route: route,
            answer(question, answer, index) {
                this.$set(question, 'answer', answer);
                this.show = [false, false, false, false];
                this.show[index + 1] = true;
                if (index == 3) {
                    this.last = true;
                }
            },
            result() {
                this.questions.forEach((q) => {
                    if (q.answer == q.correct) {
                        this.res++;
                    }
                })
                window.location.href = route('prize.get', this.res);
            }
        },

        mounted() {
            window.axios.get(route('visitorQuestions')).then((res) => {
                this.questions = res.data;

                this.questions.forEach((q) => {
                    q.answer = null;
                })
            });
        }
    }
</script>
