// Predefined templates
const lessonTemplates = {
    Math: "Teach the concept of {{objective}} using interactive exercises and visual aids suitable for {{gradeLevel}}.",
    Science: "Conduct an experiment or discussion to help students achieve {{objective}} for {{gradeLevel}}.",
    English: "Explore {{objective}} through reading, writing, and group discussions tailored for {{gradeLevel}}.",
    History: "Discuss key historical events and their significance to understand {{objective}} for {{gradeLevel}}."
};

const teachingProcedureTemplates = {
    PracticalExercises:"Begin by demonstrating key concepts through hands-on activities. Allow students to practice the skills or knowledge they've learned. Provide immediate feedback and support during exercises, and offer opportunities for students to refine their skills based on the feedback given.",
    ResourceSharing: "Introduce the lesson with an overview of available resources. Encourage students to share relevant materials and tools with each other. Use online platforms to foster discussions, encourage peer support, and allow students to collaborate on projects or research using shared resources.",
    ProblembasedLearning: "Present students with real-world problems that require them to apply knowledge and critical thinking skills. Allow them to work in groups to investigate and solve the problems. Provide guidance as needed but allow students to take ownership of their learning and solution development.",
    CooperativeLearning: "Create group-based tasks where students collaborate to achieve a common goal. Encourage students to contribute based on their strengths while working together on problem-solving and learning activities. Promote open communication, peer support, and joint responsibility for outcomes.",
    ContinuousEvaluation:"Use ongoing assessments throughout the learning process to gauge student understanding and progress. Provide regular, constructive feedback to help students improve. Adjust the teaching approach based on evaluations and offer opportunities for students to reflect and act on feedback.",
    
};

// Generate lesson plan
document.getElementById('generate-plan').addEventListener('click', function () {
    const subject = document.getElementById('subject').value;
    const gradeLevel = document.getElementById('grade-level').value;
    const objective = document.getElementById('objective').value;
    const teachingStrategy = document.getElementById('teaching-strategy').value;

    if (!objective.trim()) {
        alert('Please enter a learning objective.');
        return;
    }

    const template = lessonTemplates[subject];
    const lessonPlan = template
        .replace('{{objective}}', objective)
        .replace('{{gradeLevel}}', gradeLevel);

    const teachingProcedure = teachingProcedureTemplates[teachingStrategy];
    
    const lessonPlanDiv = document.getElementById('lesson-plan');
    lessonPlanDiv.innerHTML = `
        <h2>Generated Lesson Plan</h2>
        <p class="lesson-plan-detail"><strong>Subject:</strong> ${subject}</p>
        <p class="lesson-plan-detail"><strong>Grade Level:</strong> ${gradeLevel}</p>
        <p class="lesson-plan-detail"><strong>Learning Objective:</strong> ${objective}</p>
        <p class="lesson-plan-detail"><strong>Lesson Plan:</strong> ${lessonPlan}</p>
        <p class="lesson-plan-detail"><strong>Teaching Procedure:</strong> ${teachingProcedure}</p>
    `;
    lessonPlanDiv.style.display = 'block';
});