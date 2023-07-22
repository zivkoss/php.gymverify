


// VALUES ('John', 'Doe', 'john.doe@example.com', '123-456-7890');

// INSERT INTO trainers (first_name, last_name, email, phone_number) 
// VALUES ('Jane', 'Smith', 'jane.smith@example.com', '987-654-3210');

// INSERT INTO trainers (first_name, last_name, email, phone_number) 
// VALUES ('Michael', 'Johnson', 'michael.johnson@example.com', '555-555-5555');

// INSERT INTO trainers (first_name, last_name, email, phone_number) 
// VALUES ('Emily', 'Williams', 'emily.williams@example.com', '111-222-3333');

// INSERT INTO trainers (first_name, last_name, email, phone_number) 
// VALUES ('Robert', 'Brown', 'robert.brown@example.com', '444-444-4444');



//***********************************************************************************
// SELECT members.*,
// training_plans.name AS training_plan_name
// FROM `members` 
// LEFT JOIN `training_plans` ON members.training_plan_id = training_plans.plan_id;



// SELECT members.*,
// training_plans.name AS training_plan_name,
// trainers.first_name,
// trainers.last_name
// FROM `members` 
// LEFT JOIN `training_plans` ON members.training_plan_id = training_plans.plan_id
// LEFT JOIN `trainers` ON members.trainer_id = trainers.trainer_id;