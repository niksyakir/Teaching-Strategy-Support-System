// Predefined templates
const lessonTemplates = {
    Math: "Teach the concept of {{objective}} using interactive exercises and visual aids suitable for {{gradeLevel}}.",
    Science: "Conduct an experiment or discussion to help students achieve {{objective}} for {{gradeLevel}}.",
    English: "Explore {{objective}} through reading, writing, and group discussions tailored for {{gradeLevel}}.",
    History: "Discuss key historical events and their significance to understand {{objective}} for {{gradeLevel}}."
};

const teachingProcedureTemplates = {
    PersonalizedStrategy: "Start by assessing students' current knowledge. Group them based on their needs and learning abilities. Provide customized learning materials, and offer ongoing feedback to ensure progress. Adjust the pace and content to suit each group's individual needs.",
    RealTimeFeedback: "Begin with a brief activity to assess student understanding. Offer immediate feedback as students work through tasks. Correct mistakes on the spot, provide tips, and end with a summary of key takeaways, highlighting areas of improvement.",
    InteractiveLessons: "Start with an engaging hook, like a question or multimedia. Encourage student participation through discussions, group activities, and hands-on tasks. Use technology or interactive tools and end with a reflection on what students have learned.",
    FormativeAssessment: "Introduce the lesson with key points. Give students a quick assessment to gauge their understanding. Analyze their responses immediately and provide corrective feedback. Adjust teaching based on the assessment results.",
    MathGames: "Begin by explaining a math concept using a game format. Split students into teams and have them solve problems through game mechanics. Use digital or board games to reinforce concepts, then review the game results and strategies used.",
    ReadAloudLearnings: "Select a text related to the lesson and read it aloud to the class. Pause periodically to ask comprehension questions and engage students in discussion. After reading, have students reflect on the material and complete related activities.",
    IndependentLearning: "Provide clear learning goals and resources. Allow students to work at their own pace, encouraging self-directed learning. Offer support as needed and end with a reflection or self-assessment of their progress.",
    PeerTeaching: "Assign students to teach each other. Pair them up based on strengths or knowledge. Give each pair a topic to explain, then observe their interactions. Afterward, have the class reflect on what was learned through peer teaching.",
    ScaffoldInstruction: "Start with simple examples and guide students step-by-step through the learning process. Gradually reduce the level of support as students gain more understanding. Provide additional resources if needed and offer feedback on their independent work.",
    GoalSetting: "Introduce the concept of goal-setting and help students set personal learning goals. Break goals into smaller, achievable steps. Monitor progress throughout the lesson and encourage students to adjust their goals as they reach milestones.",
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
        <p><strong>Subject:</strong> ${subject}</p>
        <p><strong>Grade Level:</strong> ${gradeLevel}</p>
        <p><strong>Learning Objective:</strong> ${objective}</p>
        <p><strong>Lesson Plan:</strong> ${lessonPlan}</p>
        <p><strong>Teaching Procedure:</strong> ${teachingProcedure}</p>
    `;
    lessonPlanDiv.style.display = 'block';
});