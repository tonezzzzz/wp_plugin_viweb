# 
export GZ_BUILD_NAME=viweb
export GZ_BUILD_VERSION=0.01
export GZ_BUILD_HOST=local
export GZ_BUILD_DOMAIN=local.gizmo-thailand.com
export GZ_BUILD_NETWORK=dev
export GZ_BUILD_TIMEZONE=Asia/Bangkok
export GZ_BUILD_MODE=dev
export GZ_COMPOSE_PROFILES=dev
export GZ_RESTART_POLICY=unless-stopped
export GZ_ROOT_PATH=../
export GZ_RUN_PATH=${GZ_ROOT_PATH}viweb/
export GZ_BUILD_PATH=${GZ_RUN_PATH}
export GZ_CFG_PATH=${GZ_BUILD_PATH}_data/
export GZ_ENV_PATH=${GZ_BUILD_PATH}
export GZ_DATA_PATH=${GZ_ROOT_PATH}psp_data/
export GZ_DEV_PATH=${GZ_ROOT_PATH}gz_dev/
export GZ_DOCKER_REGISTRY=psp.gizmo-thailand.com:5000/
export GZ_IMAGE_NAME=${GZ_BUILD_NAME}/${GZ_BUILD_SERVICE}_${GZ_BUILD_VERSION}_${GZ_BUILD_HOST}
export GZ_CONTAINER_NAME=${GZ_BUILD_NAME}_${GZ_BUILD_SERVICE}
export COMPOSE_PROFILES=${GZ_COMPOSE_PROFILES}
export COMPOSE_PROJECT_NAME=${GZ_BUILD_NAME}
export DEPLOY_MODE=${GZ_BUILD_MODE}
