SELECT * FROM loc_feature JOIN feature ON feature.feature_id = loc_feature.id_feature JOIN localization ON localization.loc_id = loc_feature.id_loc JOIN organism ON feature.organism_id = organism.organism_id JOIN publication ON feature.publication_id = publication.publication_id WHERE feature.start = 600152 and feature.end = 600196 